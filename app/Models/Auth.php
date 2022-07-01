<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GeneralModel;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use DuelistRag3\Wowemu\SRP\UserClient;

class Auth extends Model
{
    public $timestamps = true;

    public function sessionArray($id)
    {
        $data = array(
            'session_id'        => $id,
            'session_username'  => getUserDataByID('username', $id),
            'session_email'     => getUserDataByID('email', $id),
            'session_gmlevel'   => getUserDataByID('gmlevel', $id),
            'logged'            => TRUE
        );

        return self::startSession($data);
    }

    public function startSession($data, $value = NULL)
    {
        if (is_array($data))
        {
            foreach ($data as $key => &$value)
            {
                session([$key => $value]);
            }

            return;
        }

        session([$data => $value]);
    }

    public function logout()
    {
        session()->flush();

        return true;
    }

    public function auth($user, $password)
    {

        $auth = DB::connection('web')->table('auth')->first();

        GeneralModel::buildDynamicDBConnection('auth', $auth);

        DB::purge('auth');

		DB::setDefaultConnection('auth');

        $game_acc = DB::connection('auth')->table('account')->where('username', $user)->orWhere('email', $user)->first();
        $emulator = $auth->auth_type;

        if (empty($game_acc)) {
            return back()->with('toast_error', 'User not found');
        }

        $web_acc  = DB::connection('web')->table('profiles')->where('id', $game_acc->id)->first();

        switch ($emulator) {
            case 'srp6':
                if (Schema::hasColumn('account', 'verifier')):
                    $validate = ($game_acc->verifier === self::hash($game_acc->username, $password, 'srp6', $game_acc->salt));
                else:
                    $validate = ($game_acc->v === self::hash($game_acc->username, $password, 'srp6', $game_acc->s));
                endif;
                break;
            case 'hex':
                $validate = (strtoupper($game_acc->v) === self::hash($game_acc->username, $password, 'hex', $game_acc->s));
                break;
            case 'old':
                $validate = hash_equals(strtoupper($game_acc->sha_pass_hash), self::hash($game_acc, $password));
                break;
        }

        if (!isset($validate) || !$validate) {
            return back()->with('toast_error', 'Password wrong');
        }

        self::sessionArray($game_acc->id);

        //sinc game acc with website if not exists

        if (!$web_acc) {
            DB::connection('web')->table('profiles')->insert([
                'id'    => $game_acc->id,
                'name'  => $game_acc->username,
                'mail'  => $game_acc->email
            ]);
        }

        return redirect('/home')->with('success', 'Logged in');

    }

    public function InsertUser($username, $email, $password, $securitylevel = 0)
	{
		$allauth = GeneralModel::getallauth();

		foreach ($allauth as $auth) {
			GeneralModel::buildDynamicDBConnection('auth', $auth);

			DB::purge('auth');

			DB::setDefaultConnection('auth');

			if ($auth->auth_type == 'srp6') {
				$salt = random_bytes(32);

				if (Schema::hasColumn('account', 'session_key')) {
					$insert = [
						'username'	=> $username,
						'salt'		=> $salt,
						'verifier'	=> self::hash($username, $password, 'srp6', $salt),
						'email'		=> $email,
                        'reg_mail'  => $email,
						'expansion'	=> $auth->exp,
						'session_key'	=> null
					];
				} else {
                    $insert = [
                        'username'	=> $username,
                        'salt'		=> $salt,
                        'verifier'	=> self::hash($username, $password, 'srp6', $salt),
                        'email'		=> $email,
                        'reg_mail'  => $email,
                        'expansion'	=> $auth->exp,
                        'session_key_auth'	=> null,
                        'session_key_bnet'	=> null
                    ];
				}

			} elseif ($auth->auth_type == 'hex') {
                $salt = strtoupper(bin2hex(random_bytes(32)));

                $insert = [
                    'username'  => $username,
                    'v'         => self::hash($username, $password, 'hex', $salt),
                    's'         => $salt,
                    'email'     => $email,
                    'reg_mail'  => $email,
                    'expansion' => $auth->exp,
                ];
            } elseif ($auth->auth_type == 'old') {
                $insert = [
                    'username'  => $username,
                    'sha_pass_hash' => self::hash($username, $password),
                    'email'     => $email,
                    'expansion' => $expansion,
                    'sessionkey'    => '',
                ];
            } elseif ($auth->auth_type == 'bnet') {
                $insert = [
                    'username'  => $username,
                    'sha_pass_hash' => self::hash($username, $password),
                    'email'     => $email,
                    'expansion' => $expansion,
                    'sessionkey'    => '',
                ];
            }

            DB::table('account')->insert($insert);

			$id = DB::table('account')->where('username', $username)->first()->id;

            if (Schema::hasTable('battlenet_accounts')) {
				$insert2 = [
					'id' => $id,
					'email' => strtoupper($email),
					'sha_pass_hash' => self::hash($email, $password, 'bnet'),
				];

				DB::table('battlenet_accounts')->insert($insert2);

				DB::table('account')->where('id', $id)->update(['battlenet_account' => $id, 'battlenet_index' => 1]);
            }

			if ($securitylevel > 0) {
				$insert3 = [
					'id' => $id,
					'gmlevel' => $securitylevel,
					'RealmID' => -1,
				];

				DB::table('account_access')->insert($insert3);
			}

            if (getDBSettings('user_activation') == 'FALSE')
            {
                $status = 'active';
            } else if (getDBSettings('user_activation') == 'TRUE')
            {
                $status = 'pending';
            }

            DB::connection('web')->table('profiles')->insert([
                'id'    => $id,
                'name'  => $username,
                'status'=> $status,
                'mail'  => $email
            ]);

			GeneralModel::deleteDynamicDBConnection('auth');
		}

		return true;
	}

    public static function hash($username, $password, $type, $salt = null)
	{
        switch($type)
        {
            case 'bnet':
				return strtoupper(bin2hex(strrev(hex2bin(strtoupper(hash('sha256', strtoupper(hash('sha256', strtoupper($username)) . ':' . strtoupper($password))))))));
				break;
			case 'hex':
				$client = new UserClient($username, $salt);
				return strtoupper($client->generateVerifier($password));
                break;
			case 'srp6':
				// Constants
				$g = gmp_init(7);
				$N = gmp_init('894B645E89E1535BBDAD5B8B290650530801B18EBFBF5E8FAB3C82872A3E9BB7', 16);
				// Calculate first hash
				$h1 = sha1(strtoupper($username.':'.$password), TRUE);
				// Calculate second hash
				$h2 = sha1($salt.$h1, TRUE);
				// Convert to integer (little-endian)
				$h2 = gmp_import($h2, 1, GMP_LSW_FIRST);
				// g^h2 mod N
				$verifier = gmp_powm($g, $h2, $N);
				// Convert back to a byte array (little-endian)
				$verifier = gmp_export($verifier, 1, GMP_LSW_FIRST);
				// Pad to 32 bytes, remember that zeros go on the end in little-endian!
				$verifier = str_pad($verifier, 32, chr(0), STR_PAD_RIGHT);
				return $verifier;
				break;
			default:
				return strtoupper(sha1(strtoupper($username) . ':' . strtoupper($password)));
				break;
        }
    }
}

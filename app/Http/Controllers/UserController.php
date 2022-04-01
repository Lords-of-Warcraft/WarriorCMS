<?php

namespace App\Http\Controllers;

use App\Models\GeneralModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Laizerox\Wowemu\SRP\UserClient;

class UserController extends Controller
{
    public function RegisterUser($username, $email, $password, $securitylevel = 0)
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

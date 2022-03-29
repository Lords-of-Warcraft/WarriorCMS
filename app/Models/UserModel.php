<?php

namespace App\Models;

use App\Models\GeneralModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UserModel extends Model
{
    use HasFactory;

	public static function RegisterUser($username, $email, $password, $securitylevel)
	{
		$allauth = GeneralModel::getallauth();

		foreach ($allauth as $auth) {
			Config::set("database.connections.auth", [
				'host'		=> $auth->dbhost,
				'port'		=> $auth->dbport,
				'database'	=> $auth->dbname,
				'username'	=> $auth->dbuser,
				'password'	=> $auth->dbpass,
			]);

			DB::purge('auth');

			DB::setDefaultConnection('auth');

			if ($auth->auth_type == 'srp6') {
				$salt = random_bytes(32);

				if (Schema::hasColumn('account', 'session_key')) {
					$insert = [
						'username' 	=> $username,
						'salt'		=> $salt,
						'verifier'	=> self::hash($email, $password, 'srp6', $salt),
						'email'		=> $email,
						'expansion'	=> $auth->exp,
						'session_key'	=> null
					];
				} else {
					$insert = [
						'username' 	=> $username,
						'salt'		=> $salt,
						'verifier'	=> self::hash($email, $password, 'srp6', $salt),
						'email'		=> $email,
						'expansion'	=> $auth->exp,
						'session_key_auth'	=> null,
						'session_key_bnet'	=> null
					];
				}

				DB::table('account')->insert($insert);
			}

			DB::purge('auth');
		}
	}

    public function hash($email, $password, $type, $salt)
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GeneralModel extends Model
{
    public static function testconnection()
    {
        $config = config('database.connections.web.host');

        if ($config == 'placeholder') {
            return false;
        } 
        
        try {
            DB::connection('web');

            if (!Schema::hasTable('realms') or !Schema::hasTable('auth')) {
                return false;
            }

            return true;
        } catch (Throwable $e) {
            return false;
        }
    }

    public static function getallrealms()
    {
        $connected = self::testconnection();

        if ($connected == false) {
            return false;
        }

        return DB::connection('web')->table('realms')->get();
    }

    public static function getallauth()
    {
        $connected = self::testconnection();

        if ($connected == false) {
            return false;
        }

        return DB::connection('web')->table('auth')->get();
    }

    public static function buildDynamicDBConnection($connname, $data)
    {
        return Config::set("database.connections.".$connname, [
            'driver'	=> 'mysql',
            'host'		=> $data->dbhost,
            'port'		=> $data->dbport,
            'database'	=> $data->dbname,
            'username'	=> $data->dbuser,
            'password'	=> $data->dbpass,
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ]);
    }

    public static function deleteDynamicDBConnection($connname)
    {
        DB::disconnect($connname);
        Config::set("database.connections.".$connname, [
            'driver' => 'mysql',
            "host" => "localhost",
            "database" => "",
            "username" => "",
            "password" => "",
            "port" => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ]);

        return true;
    }
}

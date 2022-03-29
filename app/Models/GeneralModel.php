<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}

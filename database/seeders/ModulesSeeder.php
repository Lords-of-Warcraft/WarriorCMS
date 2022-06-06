<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Kdabrow\SeederOnce\SeederOnce;

class ModulesSeeder extends Seeder
{
    use SeederOnce;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            [
                'name'          => 'Admin',
                'status'        => 1,
                'icon'          => 'cog',
                'has_settings'  => 0,
            ],
            [
                'name'      => 'Installer',
                'status'    => 1,
                'icon'      => 'microship',
                'has_settings'  => 0,
            ],
            [
                'name'      => 'Home',
                'status'    => 1,
                'icon'      => 'home',
                'has_settings'  => 1,
            ],
            [
                'name'      => 'News',
                'status'    => 1,
                'icon'      => 'newspaper',
                'has_settings'  => 1,

            ],
            [
                'name'      => 'User',
                'status'    => 1,
                'icon'      => 'user',
                'has_settings'  => 1,
            ],
        ]);
    }
}

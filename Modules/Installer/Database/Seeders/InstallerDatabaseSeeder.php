<?php

namespace Modules\Installer\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Kdabrow\SeederOnce\SeederOnce;

class InstallerDatabaseSeeder extends Seeder
{
    use SeederOnce;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('lang_strings')->insert([
            [
                'name' => 'default_theme_head_heading',
                'lang_code' => 'de',
                'content'   => 'Willkommen bei ',
            ],
            [
                'name' => 'default_theme_head_heading',
                'lang_code' => 'en',
                'content'   => 'Welcome to ',
            ],
            [
                'name' => 'default_theme_head_desc',
                'lang_code' => 'de',
                'content'   => 'Dein World of Warcraft Server',
            ],
            [
                'name' => 'default_theme_head_desc',
                'lang_code' => 'en',
                'content'   => 'Your World of Warcraft server',
            ],
        ]);

        DB::table('profile_images')->insert([
            [
                'name' => 'elf',
            ],
        ]);
    }
}

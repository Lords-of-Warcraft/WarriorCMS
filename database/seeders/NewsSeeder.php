<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Kdabrow\SeederOnce\SeederOnce;

class NewsSeeder extends Seeder
{
    use SeederOnce;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'title'         => 'Example news',
                'content'       => 'test',
                'author'        => null,
                'image'         => 1,
            ],
        ]);

        DB::table('news_images')->insert([
            [
                'image'         => 'default.jpg',
                'uploaded_by'   => null,
            ],
        ]);
    }
}

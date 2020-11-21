<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            [

                'text' => 'テスト',
                'comment_id' => '1',
                'favorite_id' => 'f_1',
            ],
            [
                'text' => 'テスト２',
                'comment_id' => '1',
                'favorite_id' => 'f_1',

            ], [
                'text' => 'テスト_3',
                'comment_id' => '3',
                'favorite_id' => 'f_2',

            ]

        ]);
    }
}

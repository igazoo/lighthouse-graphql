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
                'sort' => 12,

            ],
            [
                'text' => 'テスト２',
                'sort' => 1100,
            ], [
                'text' => 'テスト_3',
                'sort' => 10,
            ]

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->insert([
            [
                'post_id' => 1,
                'comment' => "テスト"
            ], [
                'post_id' => 2,
                'comment' => "テスト_2"
            ]
        ]);
    }
}

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
                'id' => '1',
                'text' => 'コメント'
            ],
            [
                'id' => '2',
                'text' => 'コメント＿２'
            ], [
                'id' => '3',
                'text' => 'コメント＿３'
            ]

        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('reports')->insert([
            [

                'flag' => true,
                'text' => 'テスト',

            ],
            [

                'flag' => false,
                'text' => 'テスト_２',

            ],
            [

                'flag' => false,
                'text' => 'テスト_3',

            ],
            [

                'flag' => false,
                'text' => 'テスト_4',


            ],
            [

                'flag' => false,
                'text' => 'テスト_5',


            ],
            [

                'flag' => true,
                'text' => 'テスト_6',


            ],
        ]);
    }
}

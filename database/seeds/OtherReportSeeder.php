<?php

use Illuminate\Database\Seeder;

class OtherReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('other_reports')->insert([
            [
                'text' => 'コメント',
                'relationship' => '夫',
                'report_id' => '1'
            ],
            [
                'text' => 'コメント_２',
                'relationship' => '妹',
                'report_id' => '2'

            ], [
                'text' => 'コメント_３',
                'relationship' => '兄',
                'report_id' => '3',
            ],
            [
                'text' => 'コメント_4',
                'relationship' => '妻',
                'report_id' => '1',
            ],
            [
                'text' => 'コメント_5',
                'relationship' => '実父',
                'report_id' => '1',
            ],
            [
                'text' => 'コメント_6',
                'relationship' => '甥',
                'report_id' => '1',
            ]
        ]);
    }
}

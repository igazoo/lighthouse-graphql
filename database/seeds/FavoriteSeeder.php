<?php

use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('favorites')->insert([
            [
                'id' => 'f_1',
                'fav' => '五十嵐'
            ], [
                'id' => 'f_2',
                'fav' => '金井'
            ]
        ]);
    }
}

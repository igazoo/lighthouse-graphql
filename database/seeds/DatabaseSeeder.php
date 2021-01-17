<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(ReportSeeder::class);
        $this->call(OtherReportSeeder::class);
        $this->call(FavoriteSeeder::class);
    }
}

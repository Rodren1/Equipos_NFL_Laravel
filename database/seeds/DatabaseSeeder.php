<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\Equipos::truncate(); //vacía la tabla de equipos
        DB::unprepared(file_get_contents('database/NFL.sql'));
    }
}

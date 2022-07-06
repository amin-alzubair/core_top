<?php

use Illuminate\Database\Seeder;
use \App\Ticket;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            UsersTableSeeder::class,
        //factory(Ticket::class,10)->create();
        UniverstiesTableSeeder::class,
        DepartmentTableSeeder::class,
        GendersTableSeeder::class,
        ]);
    }
}

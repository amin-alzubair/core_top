<?php

use Illuminate\Database\Seeder;
use \App\Ticket;
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
         $this->call([
            UsersTableSeeder::class,
        ]);

        DB::table('plans')->insert([[
            'plan_name'=>'اسبوعي' ,
            'price'=>200
        ],
        [
            'plan_name'=>'شهري' ,
            'price'=>700
        ],
        [
            'plan_name'=>'سنوي' ,
            'price'=>2200
        ]]);
    }
}

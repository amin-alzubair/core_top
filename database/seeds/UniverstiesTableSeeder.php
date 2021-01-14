<?php

use Illuminate\Database\Seeder;

class UniverstiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universties')->insert([
            'university'=>'جامعة الخرطوم',
        ]);
    }
}

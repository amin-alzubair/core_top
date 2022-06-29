<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ticket;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        'student-name'=>$faker->name,
        'university_id'=>$faker->integer,
        'department_id'=>$faker->integer,
        'gender_id'=>$faker->integer,
        'bound'=>$faker->double,
        'note'=>$faker->string,

    ];
});

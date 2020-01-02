<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'nom' => $faker->jobTitle,  
        'description' => $faker->text,
        'nbr_interesse' => $faker->numberBetween($min = 1000, $max = 9000),  
        'nbr_participe' => $faker->numberBetween($min=100,$max=1000),
        'organisateur' => $faker->company,
        'adresse' => $faker->address,
        'date_debut' => $faker->date(),
        'duree' => $faker->numerify('# jours'),
    ];
});

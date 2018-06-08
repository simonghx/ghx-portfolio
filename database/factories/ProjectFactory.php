<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'titre'=>$faker->sentence(rand(4,8)),
        'desc' => $faker->paragraph(rand(5,10)),
        
        
    ];
});

<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Livro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->paragraph,
        'descricao' => $faker->text(150),
    ];
});

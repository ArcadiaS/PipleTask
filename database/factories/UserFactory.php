<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(\App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10)
    ];
});

$factory->define(\App\Models\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
    ];
});
$factory->define(\App\Models\Profile::class, function (Faker $faker) {
    return [
        'overview' => $faker->sentence,
        'description' => $faker->sentence(10),
        'references' => $faker->sentence(5),
        'title' => $faker->sentence,
        'state_id' => $faker->numberBetween(10000000000, 99999999999),
    ];
});

$factory->define(\App\Models\Type::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Diş Hekimi', 'Avukat', 'Yazılımcı', 'Doktor', 'Veteriner Hekim', 'Yoga Hocası', 'Fitness Hocası'])
    ];
});

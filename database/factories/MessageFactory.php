<?php

use Faker\Generator as Faker;

$factory->define(App\Notifications\Message::class, function (Faker $faker) {
    return [
        
            'From' => "admin@admin.com",
            'To' => 'default',
            'Sender' => "Admin",
            'Subject' => $faker->title,
            'Body' => $faker->paragraph
            
    ];
});

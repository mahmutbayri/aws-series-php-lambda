<?php

include_once __DIR__ . '/vendor/autoload.php';

return function () {
    $names = [];
    $faker = \Faker\Factory::create('tr_TR');
    foreach (range(0, 5) as $number) {
        $names[] = $faker->name;
    }

    return [
        'statusCode' => 200,
        'body' => json_encode($names),
        'headers' => [
            'Content-Type' => 'application/json',
        ],
    ];
};

<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'pets' => [
            [
                'id' => 1,
                'petname'  => 'billy',
                'breed' => 'shitzu'
            ],
            [
                'id' => 2,
                'petname'  => 'molly',
                'breed' => 'shitzu'
            ]
        ]
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/pet', function () {
    return view('pet');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/pet/{id}', function ($id) {
    $pets = [
        [
            'id' => 1,
            'petname'  => 'billy',
            'breed' => 'shitzu'
        ],
        [
            'id' => 2,
            'petname'  => 'molly',
            'breed' => 'shitzu'
        ]
    ];

    $pet = Arr::first($pets, fn($pet) => $pet['id' == $id]);

    dd($pet);


    return view('pet');
});

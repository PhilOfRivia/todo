<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $user = User::create([
        'username' => 'Aegon',
        'name' => 'Aegon Rodríguez',
        'email' => 'aegonrodozco@gmail.com',
        'password' => Hash::make('aegon123')
    ]);

    return $user;
    //return view('welcome');
});

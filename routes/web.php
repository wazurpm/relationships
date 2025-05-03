<?php

use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    
    $user = User::find(1);
    // $user->phone()->create([
    //     'number' => '987654321'
    // ]);

    return $user->phone;
});
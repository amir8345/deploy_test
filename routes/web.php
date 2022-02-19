<?php

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $user = new User();
    return $user->lastname;
    
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome from branch feature/b "; // branch feature/a
});

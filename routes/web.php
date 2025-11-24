<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome from branch feature/a "; // branch feature/a
});

<?php

use Spyframe\lib\Route;

Route::get('/', function () {
    return [
        'message' => 'Hello World',
    ];
});

Route::start();

<?php

use Illuminate\Support\Facades\Route;

Route::get('/building', function() {
    return '建物です';
});

Route::get('/building/{room}', function($room) {
    return '部屋番号は' . $room . 'です';
});


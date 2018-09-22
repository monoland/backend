<?php

Route::middleware('throttle:60,1')->group(function () {
    Route::get('/user', 'Account\UserController@show');
    Route::post('user/info', 'Account\UserController@info');
    Route::post('user/password', 'Account\UserController@password');
});

Route::middleware('throttle:200,1')->group(function () {
    Route::post('media', 'Utility\MediaController@store');
    Route::delete('media/{media}', 'Utility\MediaController@destroy');
    // Route::get('media/{media}/download', 'Utility\MediaController@download');
});

<?php

Route::get('/', 'WebController@index');

Route::get('image/{template}/{filename}', '\Intervention\Image\ImageCacheController@getResponse');

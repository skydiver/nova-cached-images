<?php

use Illuminate\Support\Facades\Route;

Route::get('/{image}', 'Skydiver\NovaCachedImages\Http\Controllers\NovaCachedImagesController@index');

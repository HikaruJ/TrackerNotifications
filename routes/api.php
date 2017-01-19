<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Office365 API */
Route::group(array('prefix' => 'office365'), function()
{
    /* GET */
    Route::post('notifications', 'Office365Controller@notifications');
});
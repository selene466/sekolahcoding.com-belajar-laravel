<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// with controller
Route::get('/test', 'TestController@Home');
Route::get('/test/{paramsOne}', 'TestController@Page');
// above router need to uncomment namespace at app/Providers/RouteServiceProvider.php

// direct view
// Route::get('/sk', function () {
//     return view('extra');
// });

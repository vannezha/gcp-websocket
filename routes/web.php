<?php

use App\Events\MessageEvent;
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
    // ini 22 nya sama aja, yang event new lebih banyak dipakek bule
    // MessageEvent::dispatch();
    event(new MessageEvent("Vanny Ezhaan Nur Sandika"));

    return view('welcome');
});

Route::get('/send-message', function(){
    event(new MessageEvent("Vanny Ezhaan Nur Sandika"));
});

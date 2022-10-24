<?php

use App\Events\ChatMessageEvent;
use Illuminate\Http\Request;
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

Route::post('/chat-message',function(Request $request){
    event(new ChatMessageEvent($request->message));
    return "berhasil";
});

Route::get('/trigger',function(){
    event(new ChatMessageEvent("ini pesan test aja kok bang"));
    // return view('chatapp');
    return 'berhasil';
});

Route::get('/ws',function(){
    // event(new ChatMessageEvent("ini pesan test aja kok bang"));
    return view('chatapp');
    // return 'berhasil';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

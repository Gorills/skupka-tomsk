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
    return view('index');
});

Route::get('/skupka-telefonov', function () {
    return view('skupka-telefonov');
});

Route::get('/skupka-instrumentov', function () {
    return view('skupka-instrumentov');
});

Route::get('/skupka-televizorov', function () {
    return view('skupka-televizorov');
});

Route::get('/skupka-planshetov', function () {
    return view('skupka-planshetov');
});

Route::get('/skupka-magnitol', function () {
    return view('skupka-magnitol');
});


Route::get('/skupka-kompyuterov', function () {
    return view('skupka-kompyuterov');
});

//Route::get('/', function () {
//    return view('');
//});









Route::get('/thank', function () {
    return view('thank-you');
});



Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/sendemail', 'SendEmailController@index');

Route::post('/sendemail/send', 'SendEmailController@send');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

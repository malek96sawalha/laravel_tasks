<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller\cont;
use App\Http\Controllers\saleh;
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

Route::get('/login', function () {
    return view('login');
}
);

Route::post('/submit-form',[saleh::class, 'handle'])->name('submit-form');
Route::get('/success-page',[saleh::class, 'success'])->name('success-page');








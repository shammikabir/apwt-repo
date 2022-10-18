<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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



Route::get('/reg', [PagesController::class, 'Registration']);
Route::post('/reg', [PagesController::class, 'registrationSubmitted']);
Route::get('/login', [PagesController::class, 'Login']);
Route::post('/login', [PagesController::class, 'loginSubmitted']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/contact', [PagesController::class, 'studentList']);
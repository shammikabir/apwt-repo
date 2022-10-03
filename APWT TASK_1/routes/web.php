<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



/* view    
Route::get('/teams',function(){

    return view ('Ourteams');
});

Route:: get('/about',function(){

    return view ('Aboutus');
})
*/

Route::get('/teams', [PagesController::class, 'Ourteams']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/home', [PagesController::class, 'home']);
Route::get('/contact', [PagesController::class, 'index']);



?>


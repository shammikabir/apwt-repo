<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use App\Http\Controllers\TeacherController;
use App\Models\Teacher;


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

Route::get('/login', [StudentController::class, 'StudentLogin'])->name('login');
Route::post('/login', [StudentController::class, 'loginsubmit'])->name('login');

Route::get('/Registration', [StudentController::class, 'Registration'])->name('Registration');
//Route::post('/Registration', [StudentController::class, 'registrationSubmitted'])->name('Registration');

Route::post('/Registration', [StudentController::class, 'addData'])->name('Registration');;

Route::get('/Dashboard', [StudentController::class, 'StudentDashboard'])->name('Dashboard');

Route::get('/Teacherlogin', [TeacherController::class, 'Teacherlogin'])->name('Teacherlogin');


Route::get('/TeacherReg', [TeacherController::class, 'TeacherReg'])->name('TeacherReg');
Route::post('/TeacherReg', [TeacherController::class, 'TeacherAdddata'])->name('TeacherReg');
//Route::post('/login', [StudentController::class, 'loginsubmit'])->name('login');

Route::get('/TeacherDashboard', [TeacherController::class, 'TeacherDashboard'])->name('TeacherDashboard');

Route::get('/StudentList', [StudentController::class, 'StudentDetails'])->name('StudentList');
Route::post('/StudentList', [StudentController::class, 'StudentDetails'])->name('StudentList');

//Route::get('/StudentCreate', [TeacherController::class, ' newstudent'])->name('StudentCreate');
Route::post('/StudentCreate', [TeacherController::class, 'addStudent'])->name('StudentCreate');

Route::get('/StudentCreate', function () {
    return view('Teacher.StudentCreate');
});


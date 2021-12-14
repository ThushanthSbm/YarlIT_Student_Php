<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\StudentSubjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/my-info',[HomeController::class,'myInfo']);
Route::get('/profile',[HomeController::class,'myProfile']);
Route::get('/Thushanth',[HomeController::class,'myThushanth']);
Route::get('/About',[HomeController::class,'myAbout']);
Route::get('/Condact',[HomeController::class,'myCondact']);
Route::get('/Final',[HomeController::class,'myFinal']);

Route::get('/students',[StudentController::class,'index']);

Route::resource('students', StudentController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('grades', GradeController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('phones', PhoneController::class);
Route::resource('studentSubjects',StudentSubjectController::class);
Route::get('studentSubjects/crea/{id}',[StudentSubjectController::class,'crea'])->name('studentSubjects.crea');

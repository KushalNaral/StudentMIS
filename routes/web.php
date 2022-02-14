<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudentController;


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

Route::get('/students', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('students/index', [FacultyController::class , 'index']  );
Route::get('students/create', [FacultyController::class , 'create']  );
Route::get('students/show', [FacultyController::class , 'show']  );


Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::post('/students', [StudentController::class, 'store']);/*->middleware('auth');*/

Route::get('/students/{faculty:slug}/{student:slug}', [StudentController::class, 'show']);
Route::get('/students/create', [StudentController::class, 'create']);/*->middleware('auth');*/
Route::get('/students/{faculty:slug}', [StudentController::class, 'index']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', [NavController::class, 'welcome']);

Route::get('/price', [NavController::class, 'priceAndCalendar']);

Route::get('/lessons', [NavController::class, 'swimLessons']);


Route::get('/connexion', [NavController::class, 'connexion'])->middleware('guest')->name('login');

Route::post('/connexionForm', [ConnexionController::class, 'authenticate'])->middleware('guest');

Route::get('/connectedRoute', [NavController::class, 'connected'])->middleware('auth');

Route::get('/logout', [ConnexionController::class, 'logout'])->middleware('auth');

Route::get('/register', [NavController::class, 'registerMethod'])->middleware('guest');

Route::post('/registerForm', [ConnexionController::class, 'addUser'])->middleware('guest');

Route::get('/update/{id}', [Navcontroller::class, 'updateData']);

Route::post('/updatePOST/{id}', [ConnexionController::class, 'saveChanges']);

Route::get('/delete/{id}', [ConnexionController::class, 'deleteMethod']);


Route::get('/contactUs', [Navcontroller::class, 'contact']);

Route::get('/listAllLessons', [NavController::class, 'listLessons'])->middleware('auth');

Route::get('/teachers', [TeacherController::class, 'listTeachers'])->middleware('auth');

Route::get('/updateTeacher/{id}', [TeacherController::class, 'updateTeacher'])->middleware('admin');

Route::post('/updateTeacherPOST/{id}', [TeacherController::class, 'saveChangesTeacher'])->middleware('admin');

Route::get('/deleteTeacher/{id}', [TeacherController::class, 'destroy'])->middleware('admin');

Route::get('/addTeacher', [TeacherController::class, 'create'])->middleware('admin');

Route::post('/addTeacherPost', [TeacherController::class, 'saveTeacher'])->middleware('admin');
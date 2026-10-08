<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CohortController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\AdvertisementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('areas',[AreaController::class,'index'])->name('areas.index');
Route::get('areas/{id}',[AreaController::class,'show'])->name('areas.show');

Route::get('trainingcenters',[TrainingCenterController::class,'index'])->name('trainingcenters.index');
Route::get('trainingcenters/{id}',[TrainingCenterController::class,'show'])->name('trainingcenters.show');

Route::get('computers',[ComputerController::class,'index'])->name('computers.index');
Route::get('computers/{id}',[ComputerController::class,'show'])->name('computers.show');

Route::get('courses',[CourseController::class,'index'])->name('courses.index');
Route::get('courses/{id}',[CourseController::class,'show'])->name('courses.show');;

Route::get('teachers',[TeacherController::class,'index'])->name('teachers.index');
Route::get('teachers/{id}',[TeacherController::class,'show'])->name('teachers.show');

Route::get('apprentices',[ApprenticeController::class,'index'])->name('apprentices.index');
Route::get('apprentices/{id}',[ApprenticeController::class,'show'])->name('apprentices.show');

Route::get('programs',[ProgramController::class,'index'])->name('programs.index');
Route::get('programs/{id}',[ProgramController::class,'show'])->name('programs.show');

Route::get('offers',[OfferController::class,'index'])->name('offers.index');
Route::get('offers/{id}',[OfferController::class,'show'])->name('offers.show');

Route::get('cohorts',[CohortController::class,'index'])->name('cohorts.index');
Route::get('cohorts/{id}',[CohortController::class,'show'])->name('cohorts.show');

Route::get('environments',[EnvironmentController::class,'index'])->name('environments.index');
Route::get('environments/{id}',[EnvironmentController::class,'show'])->name('environments.show');

Route::get('advertisements',[AdvertisementController::class,'index'])->name('advertisements.index');
Route::get('advertisements/{id}',[AdvertisementController::class,'show'])->name('advertisements.show');

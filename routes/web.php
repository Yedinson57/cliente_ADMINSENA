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

Route::get('areas', [AreaController::class, 'index'])->name('areas.index');
Route::get('area/create',[AreaController::class,'create'])->name('areas.create');
Route::post('area', [AreaController::class, 'store'])->name('areas.store');
Route::get('area/{area}', [AreaController::class, 'show'])->name('areas.show');
Route::get('area/{area}/editar',[AreaController::class,'edit'])->name('areas.edit');
Route::put('area/{area}', [AreaController::class, 'update'])->name('areas.update');
Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('areas.destroy');

Route::get('trainingcenters', [TrainingCenterController::class, 'index'])->name('trainingcenters.index');
Route::get('trainingcenter/create',[TrainingCenterController::class,'create'])->name('trainingcenters.create');
Route::post('trainingcenter', [TrainingCenterController::class, 'store'])->name('trainingcenters.store');
Route::get('trainingcenter/{trainingcenter}', [TrainingCenterController::class, 'show'])->name('trainingcenters.show');
Route::get('trainingcenter/{trainingcenter}/editar',[TrainingCenterController::class,'edit'])->name('trainingcenters.edit');
Route::put('trainingcenter/{trainingcenter}', [TrainingCenterController::class, 'update'])->name('trainingcenters.update');
Route::delete('trainingcenter/{trainingcenter}', [TrainingCenterController::class, 'destroy'])->name('trainingcenters.destroy');

Route::get('computers', [ComputerController::class, 'index'])->name('computers.index');
Route::get('computer/create',[ComputerController::class,'create'])->name('computers.create');
Route::post('computer', [ComputerController::class, 'store'])->name('computers.store');
Route::get('computer/{computer}', [ComputerController::class, 'show'])->name('computers.show');
Route::get('computer/{computer}/editar',[ComputerController::class,'edit'])->name('computers.edit');
Route::put('computer/{computer}', [ComputerController::class, 'update'])->name('computers.update');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computers.destroy');

Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('course/create',[CourseController::class,'create'])->name('courses.create');
Route::post('course', [CourseController::class, 'store'])->name('courses.store');
Route::get('course/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('course/{course}/editar',[CourseController::class,'edit'])->name('courses.edit');
Route::put('course/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

Route::get('teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('teacher/create',[TeacherController::class,'create'])->name('teachers.create');
Route::post('teacher', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('teacher/{teacher}', [TeacherController::class, 'show'])->name('teachers.show');
Route::get('teacher/{teacher}/editar',[TeacherController::class,'edit'])->name('teachers.edit');
Route::put('teacher/{teacher}', [TeacherController::class, 'update'])->name('teachers.update');
Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teachers.destroy');

Route::get('apprentices', [ApprenticeController::class, 'index'])->name('apprentices.index');
Route::get('apprentice/create',[ApprenticeController::class,'create'])->name('apprentices.create');
Route::post('apprentice', [ApprenticeController::class, 'store'])->name('apprentices.store');
Route::get('apprentice/{apprentice}', [ApprenticeController::class, 'show'])->name('apprentices.show');
Route::get('apprentice/{apprentice}/editar',[ApprenticeController::class,'edit'])->name('apprentices.edit');
Route::put('apprentice/{apprentice}', [ApprenticeController::class, 'update'])->name('apprentices.update');
Route::delete('apprentice/{apprentice}', [ApprenticeController::class, 'destroy'])->name('apprentices.destroy');

Route::get('programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('program/create',[ProgramController::class,'create'])->name('programs.create');
Route::post('program', [ProgramController::class, 'store'])->name('programs.store');
Route::get('program/{program}', [ProgramController::class, 'show'])->name('programs.show');
Route::get('program/{program}/editar',[ProgramController::class,'edit'])->name('programs.edit');
Route::put('program/{program}', [ProgramController::class, 'update'])->name('programs.update');
Route::delete('program/{program}', [ProgramController::class, 'destroy'])->name('programs.destroy');

Route::get('offers', [OfferController::class, 'index'])->name('offers.index');
Route::get('offer/create',[OfferController::class,'create'])->name('offers.create');
Route::post('offer', [OfferController::class, 'store'])->name('offers.store');
Route::get('offer/{offer}', [OfferController::class, 'show'])->name('offers.show');
Route::get('offer/{offer}/editar',[OfferController::class,'edit'])->name('offers.edit');
Route::put('offer/{offer}', [OfferController::class, 'update'])->name('offers.update');
Route::delete('offer/{offer}', [OfferController::class, 'destroy'])->name('offers.destroy');

Route::get('cohorts', [CohortController::class, 'index'])->name('cohorts.index');
Route::get('cohort/create',[CohortController::class,'create'])->name('cohorts.create');
Route::post('cohort', [CohortController::class, 'store'])->name('cohorts.store');
Route::get('cohort/{cohort}', [CohortController::class, 'show'])->name('cohorts.show');
Route::get('cohort/{cohort}/editar',[CohortController::class,'edit'])->name('cohorts.edit');
Route::put('cohort/{cohort}', [CohortController::class, 'update'])->name('cohorts.update');
Route::delete('cohort/{cohort}', [CohortController::class, 'destroy'])->name('cohorts.destroy');

Route::get('environments', [EnvironmentController::class, 'index'])->name('environments.index');
Route::get('environment/create',[EnvironmentController::class,'create'])->name('environments.create');
Route::post('environment', [EnvironmentController::class, 'store'])->name('environments.store');
Route::get('environment/{environment}', [EnvironmentController::class, 'show'])->name('environments.show');
Route::get('environment/{environment}/editar',[EnvironmentController::class,'edit'])->name('environments.edit');
Route::put('environment/{environment}', [EnvironmentController::class, 'update'])->name('environments.update');
Route::delete('environment/{environment}', [EnvironmentController::class, 'destroy'])->name('environments.destroy');

Route::get('advertisements', [AdvertisementController::class, 'index'])->name('advertisements.index');
Route::get('advertisement/create',[AdvertisementController::class,'create'])->name('advertisements.create');
Route::post('advertisement', [AdvertisementController::class, 'store'])->name('advertisements.store');
Route::get('advertisement/{advertisement}', [AdvertisementController::class, 'show'])->name('advertisements.show');
Route::get('advertisement/{advertisement}/editar',[AdvertisementController::class,'edit'])->name('advertisements.edit');
Route::put('advertisement/{advertisement}', [AdvertisementController::class, 'update'])->name('advertisements.update');
Route::delete('advertisement/{advertisement}', [AdvertisementController::class, 'destroy'])->name('advertisements.destroy');

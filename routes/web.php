<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
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
//Route::redirect('/', 'school/login', 302);

//General Crud
Route::delete('delete',[CrudController::class, 'delete']);

//Super Admin
Route::view('admin/login','login')->name('login');
Route::post('admin/do-login', [AuthController::class, 'admin_login'])->name('do_login');
Route::get('admin/dashboard',[AuthController::class, 'admin_dashboard'])->name('dashboard');
Route::get('admin/logout',[AuthController::class, 'admin_logout'])->name('logout');

//School Auth
Route::view('school/login','school-login')->name('school-login');
Route::post('school/do-login', [AuthController::class, 'school_login'])->name('school-do-login');
Route::get('school/dashboard/{id?}',[AuthController::class, 'school_dashboard'])->name('school-dashboard');
Route::get('school/logout',[AuthController::class, 'school_logout'])->name('school-logout');

//Activities
Route::get('all-activities',[ActivityController::class, 'view'])->name('activities');
Route::get('add-activity',[ActivityController::class, 'add'])->name('add-activity');
Route::post('create-activity',[ActivityController::class, 'create'])->name('create-activity');

//School
Route::get('all-schools',[SchoolController::class, 'view'])->name('all-school');
Route::get('add-school',[SchoolController::class, 'add'])->name('add-school');
Route::post('create-school',[SchoolController::class, 'create'])->name('create-school');
Route::post('create-branch',[SchoolController::class, 'create_branch'])->name('create-branch');

//Subjects
Route::get('all-subjects',[SubjectsController::class, 'view'])->name('all-subject');
Route::get('add-subject',[SubjectsController::class, 'add'])->name('add-subject');
Route::post('create-subject',[SubjectsController::class, 'create'])->name('create-subject');
Route::post('create-school-subject',[SubjectsController::class, 'create_school_subject'])->name('create-school-subject');

//Rooms
Route::get('all-rooms',[RoomsController::class, 'view'])->name('all-room');
Route::get('add-room',[RoomsController::class, 'add'])->name('add-room');
Route::post('create-room',[RoomsController::class, 'create'])->name('create-room');
Route::post('create-school-room',[RoomsController::class, 'create_school_room'])->name('create-school-room');


//teachers
Route::get('all-teachers',[TeacherController::class, 'view'])->name('all-teachers');
Route::get('add-teachers',[TeacherController::class, 'add'])->name('add-teachers');
Route::post('create-teachers',[TeacherController::class, 'create'])->name('create-teachers');
// Route::post('create-school-teacher',[TeacherController::class, 'create_school_room'])->name('create-school-teacher');

//student
Route::get('all-students',[StudentController::class, 'view'])->name('all-students');
Route::get('add-students',[StudentController::class, 'add'])->name('add-students');
Route::post('create-students',[StudentController::class, 'create'])->name('create-students');
// Route::post('create-school-teacher',[TeacherController::class, 'create_school_room'])->name('create-school-teacher');


//Notices
Route::view('all-notices','notices.index')->name('all-notice');
Route::view('add-notice','notices.add')->name('add-notice');

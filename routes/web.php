<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\Hospital\DoctorController;
use  App\Http\Controllers\Hospital\AppointmentController;
use  App\Http\Controllers\Hospital\DepartmentController;

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
    return view('index');
})->name('index');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

//Doctor routes
Route::prefix('doctor')->group(function(){
    Route::get('/view', [DoctorController::class, 'View_Doctor'])->name('doctor.view');
    Route::get('/add', [DoctorController::class, 'Add_Doctor'])->name('doctor.add');
    Route::post('/store', [DoctorController::class, 'Store_Doctor'])->name('doctor.store');
    Route::get('/edit/{id}', [DoctorController::class, 'Edit_Doctor'])->name('doctor.edit');
    Route::post('/update/{id}', [DoctorController::class, 'Update_Doctor'])->name('doctor.update');
    Route::get('/delete/{id}', [DoctorController::class, 'Delete_Doctor'])->name('doctor.delete');
    Route::get('/details/{id}', [DoctorController::class, 'Details_Doctor'])->name('doctor.details');
});

//Department routes
Route::prefix('department')->group(function(){
    Route::get('/view', [DepartmentController::class, 'View_Department'])->name('department.view');
    Route::get('/add', [DepartmentController::class, 'Add_Department'])->name('department.add');
    Route::post('/store', [DepartmentController::class, 'Store_Department'])->name('department.store');
    Route::get('/edit/{id}', [DepartmentController::class, 'Edit_Department'])->name('department.edit');
    Route::post('/update/{id}', [DepartmentController::class, 'Update_Department'])->name('department.update');
    Route::get('/delete/{id}', [DepartmentController::class, 'Delete_Department'])->name('department.delete');
});

//Appointment routes
Route::prefix('appointment')->group(function(){
    Route::get('/view', [AppointmentController::class, 'View_Appointment'])->name('appointment.view');
    Route::get('/add', [AppointmentController::class, 'Add_Appointment'])->name('appointment.add');
    Route::post('/store', [AppointmentController::class, 'Store_Appointment'])->name('appointment.store');
    Route::get('/edit/{id}', [AppointmentController::class, 'Edit_Appointment'])->name('appointment.edit');
    Route::post('/keep', [AppointmentController::class, 'Keep_Appointment'])->name('appointment.keep');
    Route::get('/delete/{id}', [AppointmentController::class, 'Delete_Appointment'])->name('appointment.delete');
});




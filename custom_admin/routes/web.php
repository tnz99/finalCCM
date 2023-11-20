<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\adminRegisterController;
use App\Http\Controllers\Admin\MyProfileController ;
use App\Http\Controllers\Admin\firstController;
use App\Http\Controllers\Admin\newAdminController;
use App\Http\Middleware\AdminAccessMiddleware;
use App\Http\Controllers\YourController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([
    'verify'=>true
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register', [DashboardController::class, 'registered']);
    Route::get('/admin-register', [DashboardAdminController::class, 'registeredAdmins']);
    Route::get('/new-admin-register', [newAdminController::class, 'registered']);

    Route::get('/save-adminregister', [adminRegisterController::class, 'index']);
    Route::post('/save-adminregister', [adminRegisterController::class, 'store']);

    // Apply the 'admin.access' middleware to these routes
    Route::middleware(['admin.access'])->group(function () {
        Route::get('/admin/{id}/edit', [DashboardAdminController::class, 'registerededit'])->name('admin.edit');
        Route::put("/admin-register-update/{id}", [DashboardAdminController::class, 'registeredupdate'])->name('admin.update');
        Route::delete("/admin-register-delete/{id}", [DashboardAdminController::class, 'registerdelete'])->name('admin.delete');
    });

    Route::get('/role-edit/{id}', [DashboardAdminController::class, 'registerededit']);
    Route::put("/role-register-update/{id}", [DashboardAdminController::class, 'registeredupdate']);
    Route::delete("/role-delete/{id}", [DashboardAdminController::class, 'registerdelete']);
    Route::get('/dashboard', [firstController::class, 'dashboard']);
    Route::get('/show', [MyProfileController::class, 'show']);

    // Example route definition
    Route::post('/check-email-exists', [YourController::class, 'checkEmailExists']);


});



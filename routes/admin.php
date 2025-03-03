<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::redirect('admin', 'admin/dashboard');

Route::group([
    'middleware' => ['auth', 'verified', 'role:admin'],
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('dashboard', Admin\DashboardController::class)
        ->name('dashboard');
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
//Route::middleware(['auth', 'verified', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {

    // User routes
    Route::get('admin.users.index', [UserController::class, 'index'])->name('admin.users.index');
//    Route::post('users/toggle-block/{id}', [UserController::class, 'toggleBlock'])->name('users.toggleBlock');
//    Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');

//    Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
//    Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');
//    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
//
//    Route::resource('roles', RolesController::class);
//
//    Route::get('/roles/{roleId}/permissions', [RolesController::class, 'role_permission_show'])->name('roles.permissions');
//    Route::post('/roles/{roleId}/permissions', [RolesController::class, 'role_permission_update']);


});


<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');



Route::middleware(['auth','role:Admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/permissions',[PermissionController::class,'index'])->name('permission.index');
    Route::post('/role/create',[RoleController::class,'create'])->name('role.create');
});
Route::middleware(['auth','checkUserOrAdmin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/roles',[RoleController::class,'index'])->name('role.index');
});






Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

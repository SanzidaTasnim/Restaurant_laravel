<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/redirect',[HomeController::class,'redirect']);
Route::post('/addCart/{id}',[HomeController::class,'addCart']);
Route::get('/showCart/{id}',[HomeController::class,'showCart']);


Route::get('/users',[AdminController::class,'users']);
Route::get('/deleteUsers/{id}',[AdminController::class,'deleteUsers']);
Route::get('/foodMenu',[AdminController::class,'foodMenu']);
Route::post('/uploadFoodMenu',[AdminController::class,'uploadFoodMenu']);
Route::get('/allMenu',[AdminController::class,'allMenu']);
Route::get('/menu_delete/{id}',[AdminController::class,'menu_delete']);
Route::get('/menu_update/{id}',[AdminController::class,'menu_update']);
Route::post('/updated_menu/{id}',[AdminController::class,'updated_menu']);
Route::get('/reservation',[AdminController::class,'reservation']);
Route::post('/view_reservation',[AdminController::class,'view_reservation']);
Route::get('/add_chefs',[AdminController::class,'add_chefs']);
Route::post('/uploadChefs',[AdminController::class,'uploadChefs']);
Route::get('/view_chefs',[AdminController::class,'view_chefs']);
Route::get('/chef_delete/{id}',[AdminController::class,'chef_delete']);
Route::get('/chef_update/{id}',[AdminController::class,'chef_update']);
Route::post('/updated_chefs/{id}',[AdminController::class,'updated_chefs']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

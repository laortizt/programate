<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Models\Category;
use GuzzleHttp\Promise\Create;
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
    return view('welcome');
});

Route::resource('category', CategoryController::class);
Route::resource('certificate', CertificateController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('country', CountryController::class);
Route::resource('profesional', ProfesionalController::class);
Route::resource('project', ProjectController::class);
Route::resource('user', UserController::class);
Route::resource('permission', PermissionController::class);
Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create']);
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create']);
    Route::get('permissions', [App\Http\Controllers\PermissionController::class, 'create']);
    Route::get('permissions', [App\Http\Controllers\PermissionController::class, 'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', [App\Http\Controllers\Controller::class, 'welcome'])->name('welcome');








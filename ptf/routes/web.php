<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('category', CategoryController::class);
Route::resource('certificate', CertificateController::class);
Route::resource('cliente', ClienteController::class);
Route::resource('country', CountryController::class);
Route::resource('profesional', ProfesionalController::class);
Route::resource('project', ProjectController::class);
Route::resource('user', UserController::class);
Route::resource('permission', PermissionController::class);
Route::resource('role', RoleController::class);
Route::resource('certificate', CertificateController::class)->names('profesional.certificate');

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/category/create', [CategoryController::class, 'create']);
    Route::get('/users/create', [UserController::class, 'create']);
    Route::get('/permissions', [PermissionController::class, 'create']);
    Route::get('/permission/{id}/show', [PermissionController::class, 'show'])->name('permission.show');
    Route::get('/role/{id}/show', [RoleController::class, 'show'])->name('role.show');
    Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
    Route::get('/role', [RoleController::class, 'index'])->name('role.index');
    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project', [ProjectController::class, 'index'])->name('project.create');
    
    
});


Route::get('/welcome', [App\Http\Controllers\Controller::class, 'welcome'])->name('welcome');






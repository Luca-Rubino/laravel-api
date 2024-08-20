<?php

use App\Http\Controllers\admin\CreatorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\ProjectController as ProjectController;
use App\Http\Controllers\HomeController as GuestHomeController;
use App\Http\Controllers\admin\TechnologyController;

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



Auth::routes();

Route::get('/', [GuestHomeController::class, 'index'])->name('home');
Route::get('/home', [GuestHomeController::class, 'index'])->name('home');


route::middleware('auth')->name('admin.')->prefix('admin/')->group(
    function(){
        Route::get('project/delete', [ProjectController::class, 'deletedIndex'])->name('project.deleteindex');
        Route::patch('project/{project}/restore', [ProjectController::class, 'restore'])->name('project.restore');
        Route::delete('project/{project}/delete', [ProjectController::class, 'delete'])->name('project.permanent_delete');
        Route::resource('project', ProjectController::class);
        Route::get('technologies', [TechnologyController::class, 'index'])->name('technologies.index');
        Route::get('creator', [CreatorController::class, 'index'])->name('creators.index');
    }
);


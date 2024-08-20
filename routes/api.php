<?php

use App\Http\Controllers\Api\ProjectController;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/project", [ProjectController::class, "index"])->name('api.project.index');
Route::get("/project/search", [ProjectController::class, "projectSearch"])->name('api.project.search');
Route::get("/project/{project}", [ProjectController::class, "show"])->name('api.project.show');

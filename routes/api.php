<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('job', [JobController::class, 'store'])->middleware('auth')->name('job.store');
Route::get('jobs', [JobController::class, 'index'])->middleware('auth')->name('job.index');
Route::get('job/create', [JobController::class, 'index'])->middleware('auth')->name('job.create');
Route::get('job/{unique_id}', [JobController::class, 'show'])->middleware('auth')->name('job.show');
Route::get('job/{unique_id}/candidates', [JobController::class, 'candidates'])->middleware('auth')->name('job.candidates');

Route::post('job/{unique_id}/apply', [JobController::class, 'apply'])->name('job.apply');
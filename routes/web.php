<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisualizationController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'visualization', 'as' => 'visualization.'], function () {
        Route::get('case-monitoring', [VisualizationController::class, 'monitoringParticipantCase'])->name('monitoring.case');
        Route::get('case-prediction', [VisualizationController::class, 'predictionParticipantCase'])->name('prediction.case');
        Route::get('top-case-city', [VisualizationController::class, 'topCaseInCity'])->name('top.case.city');
    });
});



require __DIR__ . '/auth.php';

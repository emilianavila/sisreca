<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdtsgController;

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

Route::get('/', HomeController::class);
Route::get('idtsgs', [IdtsgController::class, 'index'])->name('idtsgs.index');
Route::get('idtsgs/crear_fp770', [IdtsgController::class, 'crear_fp770'])->name('idtsgs.crear_fp770');
Route::get('idtsgs/crear_fp750', [IdtsgController::class, 'crear_fp750'])->name('idtsgs.crear_fp750');
Route::get('idtsgs/crear_fo770', [IdtsgController::class, 'crear_fo770'])->name('idtsgs.crear_fo770');
Route::get('idtsgs/crear_fo750', [IdtsgController::class, 'crear_fo750'])->name('idtsgs.crear_fo750');
Route::post('idtsgs', [IdtsgController::class, 'store'])->name('idtsgs.store');
Route::get('idtsgs/{idtsg}', [IdtsgController::class, 'show'])->name('idtsgs.show'); 

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\homeController;

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
Route::get('/', homeController::class);
Route::get('agenda',[agendaController::class, 'index'])->name('agenda.index');
Route::get('agenda/create',[agendaController::class, 'create'])->name('agenda.create');
Route::post('agenda', [agendaController::class,'store'])->name('agenda.store');
Route::get('agenda/{agenda}',[agendaController::class, 'show'])->where(['agenda'=>'[0-9]+'])->name('agenda.show');



?>

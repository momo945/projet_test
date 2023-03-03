<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Models\task;
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
    return view('auth.login');
});
Route::get('cree_taches', [adminController::class, 'index']);
Route::post('cree_taches', [adminController::class, 'ajouter_taches']);
Route::get('supprimer/{id}', [adminController::class, 'supprimer_taches']);
Route::get('update/{id}', [adminController::class, 'update_tache']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $tache= task::all();//recuperation des donnes du bd
        return view('dashboard',compact('tache'));
    })->name('dashboard');
});

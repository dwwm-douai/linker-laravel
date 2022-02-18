<?php

use App\Http\Controllers\LinkController;
use App\Models\Link;
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

Route::get('/', [LinkController::class, 'index']);
Route::post('/lien/creer', [LinkController::class, 'store']);
Route::get('/l/{id}/afficher', [LinkController::class, 'show']);
Route::get('/l/{id}', [LinkController::class, 'redirect']);

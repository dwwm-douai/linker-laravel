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

Route::get('/', function () {
    return view('home', [
        'links' => Link::all(),
    ]);
});

Route::get('/l/{id}/afficher', function ($id) {
    $link = Link::find($id);

    return view('show', ['link' => $link]);
});

Route::get('/l/{id}', function ($id) {
    $link = Link::find($id);

    return redirect($link->url);
});

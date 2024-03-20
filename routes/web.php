<?php

use App\Http\Controllers\TokoController;
use App\Models\Toko;
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
    return view('welcome',
    [
        'data_toko'=> Toko::all()
    ]
    );
})->name('home');

Route::get('/list-toko', function () {
    return view('list_toko',
    [
        'data_toko'=> Toko::all()
    ]
    );
})->name('listToko');

Route::get('/list-toko/toko/{id}',[
    TokoController::class,'cariToko'
    ])->name('cariToko');
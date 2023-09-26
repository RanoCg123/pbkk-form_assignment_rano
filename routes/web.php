<?php

use App\Http\Controllers\formcont;
use App\Http\Controllers\showformcont;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/form', [formcont::class, 'create'])->name('form');
Route::post('/form', [formcont::class, 'store'] );
Route::get('/showform', [showformcont::class, 'show']) -> name('showform');
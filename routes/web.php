<?php

use App\Http\Controllers\Guest\PageController;
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
// aprire array inserire la classe del controller 
// inserire la , poi il nome della funzione da chiamare
Route::get('/', [PageController::class, 'index'])->name('home');


    


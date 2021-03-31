<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PageController;
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
    return view('welcome');
});

// Route::get('/nmd', function() {
//     return ['students', 'lectors'];
// });

// route that handles the GET request to /nmd
Route::get('/nmd', [PageController::class, 'nmd'])->name('pages.nmd');

Route::get('/clients', [ClientsController::class, 'index'])->name('clients.index');
Route::post('/clients', [ClientsController::class, 'index'])->name('clients.index');

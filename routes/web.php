<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\IncomingItemController;
use App\Http\Controllers\OutgoingItemController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/item', [ItemController::class, 'index']);
    Route::get('/item/create', [ItemController::class, 'create']);
    Route::post('/item/store', [ItemController::class, 'store']);
    Route::get('/item/{id}/show', [ItemController::class, 'show']);
    Route::get('/item/{id}/edit', [ItemController::class, 'edit']);
    Route::put('/item/{id}', [ItemController::class, 'update']);
    Route::delete('/item/{id}', [ItemController::class, 'destroy']);

    // Route::get('/incoming', [IncomingItemController::class, 'index']);
    // Route::get('/incoming-item/create', [IncomingItemController::class, 'create']);
    // Route::post('/incoming-item/store', [IncomingItemController::class, 'store']);

    // Route::resource('item', ItemController::class);
    Route::resource('incoming', IncomingItemController::class);
    Route::resource('outgoing', OutgoingItemController::class);

    // Route::get('/outgoing-item', [OutgoingItemController::class, 'index']);
    // Route::get('/outgoing-item/create', [OutgoingItemController::class, 'create']);
    // Route::post('/outgoing-item/store', [OutgoingItemController::class, 'store']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

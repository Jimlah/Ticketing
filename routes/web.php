<?php

use App\Http\Controllers\AttachAgentToTicketController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;
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

Route::get('/dashboard', DashboardController::class)->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {

    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resource('priorities', CategoryController::class)->except(['show']);

    Route::resource('tickets', TicketController::class);
    Route::group(['prefix' => 'tickets'], function () {
        Route::resource('/{ticket}/agents', AttachAgentToTicketController::class)->only(['store', 'update', 'destroy']);
        Route::resource('/{ticket}/comments', CommentController::class);
    });

    Route::resource('customers', CustomerController::class);
});

require __DIR__ . '/auth.php';

Route::view('about', 'about')->name('about')->middleware('auth');

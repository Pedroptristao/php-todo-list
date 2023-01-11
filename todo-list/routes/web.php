<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoListController;

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

Route::get('/', [todoListController::class, 'renderList']);
Route::get('/doneTasks', [todoListController::class, 'renderListDone'])->name('doneTasks');
Route::post('/saveItem', [todoListController::class, 'saveItem'])->name('saveItem');
Route::post('markComplete/{id}', [todoListController::class, 'markComplete'])->name('markComplete');
Route::post('deleteTask/{id}', [todoListController::class, 'deleteTask'])->name('deleteTask');

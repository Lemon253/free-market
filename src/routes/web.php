<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
//'/'にアクセスした時にindexを実行？
Route::get('/', [ItemController::class, 'index']);

//ミドルウェアの設定
Route::middleware('auth')->group(function () {
    // Route::get('/', [ItemController::class, 'index']);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UploadController;
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
Route::get(
    '/',
    [InputController::class, 'index']
)->name('index');

Route::post(
    '/',
    [InputController::class, 'input']
)->name('input');

Route::get(
    '/order',
    [OrderController::class, 'show']
)->name('show');

Route::post(
    '/order',
    [OrderController::class, 'order']
)->name('order');

Route::get(
    '/upload',
    [UploadController::class, 'index']
)->name('upload');

Route::post(
    '/upload',
    [UploadController::class, 'upload']
)->name('upload_files');

Route::get(
    '/upload/delete/{filename}',
    [UploadController::class, 'delete']
)->name('delete');


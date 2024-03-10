<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraktikumController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('', [PraktikumController::class, 'index']);
Route::post('praktikum', [PraktikumController::class, 'tambahPraktikum']);
Route::put('praktikum/{id_praktikum}', [PraktikumController::class, 'editPraktikum']);
Route::delete('praktikum/{id_praktikum}', [PraktikumController::class, 'hapusPraktikum']);

// Route::middleware('guest')->prefix('praktikum')->group(function () {
//     Route::get('', [PraktikumController::class, 'index']);
//     Route::post('tambah', [PraktikumController::class, 'tambahPraktikum']);
//     Route::put('edit', [PraktikumController::class, 'editPraktikum']);
//     Route::delete('hapus', [PraktikumController::class, 'hapusPraktikum']);
// });

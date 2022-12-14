<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErmController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard2');
Route::get('/erm', [ErmController::class, 'index'])->name('erm');
Route::post('/ermform', [ErmController::class, 'formpasien'])->name('ermform');
Route::post('/pilihform', [ErmController::class, 'pilihform'])->name('pilihform');
Route::post('/carilayanan', [ErmController::class, 'carilayanan'])->name('carilayanan');
Route::post('/simpanrm02', [ErmController::class, 'simpanrm02'])->name('simpanrm02');
Route::post('/simpanformanakbaru', [ErmController::class, 'simpanformanakbaru'])->name('simpanformanakbaru');
Route::post('/simpanrm02lama', [ErmController::class, 'simpanrm02lama'])->name('simpanrm02lama');
Route::post('/simpanrmanak', [ErmController::class, 'simpanrmanak'])->name('simpanrmanak');
Route::post('/simpanformlab', [ErmController::class, 'simpanformlab'])->name('simpanformlab');
Route::post('/simpanradiologi', [ErmController::class, 'simpanradiologi'])->name('simpanradiologi');
Route::post('/simpanlayanan', [ErmController::class, 'simpanlayanan'])->name('simpanlayanan');
Route::get('/caritarif', [ErmController::class, 'caritarif'])->name('caritarif');

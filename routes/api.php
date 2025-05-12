<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\PemberitahuanController;
use App\Http\Controllers\MateriTugasController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\EnrollController;

    // Routes for User
    Route::get('users', [UserController::class, 'index']);
    Route::get('users/{id}', [UserController::class, 'show']);
    Route::post('users', [UserController::class, 'store']);
    Route::put('users/{id}', [UserController::class, 'update']);
    Route::delete('users/{id}', [UserController::class, 'destroy']);

    // Routes for MataKuliah
    Route::get('mata-kuliah', [MataKuliahController::class, 'index']);
    Route::get('mata-kuliah/{id}', [MataKuliahController::class, 'show']);
    Route::post('mata-kuliah', [MataKuliahController::class, 'store']);
    Route::put('mata-kuliah/{id}', [MataKuliahController::class, 'update']);
    Route::delete('mata-kuliah/{id}', [MataKuliahController::class, 'destroy']);

    // Routes for Pemberitahuan
    Route::get('pemberitahuan', [PemberitahuanController::class, 'index']);
    Route::get('pemberitahuan/{id}', [PemberitahuanController::class, 'show']);
    Route::post('pemberitahuan', [PemberitahuanController::class, 'store']);
    Route::put('pemberitahuan/{id}', [PemberitahuanController::class, 'update']);
    Route::delete('pemberitahuan/{id}', [PemberitahuanController::class, 'destroy']);

    // Routes for MateriTugas
    Route::get('materi-tugas', [MateriTugasController::class, 'index']);
    Route::get('materi-tugas/{id}', [MateriTugasController::class, 'show']);
    Route::post('materi-tugas', [MateriTugasController::class, 'store']);
    Route::put('materi-tugas/{id}', [MateriTugasController::class, 'update']);
    Route::delete('materi-tugas/{id}', [MateriTugasController::class, 'destroy']);

    // Routes for Nilai
    Route::get('nilai', [NilaiController::class, 'index']);
    Route::get('nilai/{id}', [NilaiController::class, 'show']);
    Route::post('nilai', [NilaiController::class, 'store']);
    Route::put('nilai/{id}', [NilaiController::class, 'update']);
    Route::delete('nilai/{id}', [NilaiController::class, 'destroy']);

    // Routes for Enroll
    Route::get('enroll', [EnrollController::class, 'index']);
    Route::get('enroll/{id}', [EnrollController::class, 'show']);
    Route::post('enroll', [EnrollController::class, 'store']);
    Route::put('enroll/{id}', [EnrollController::class, 'update']);
    Route::delete('enroll/{id}', [EnrollController::class, 'destroy']);
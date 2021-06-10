<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

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
    return view('auth.login');
})->name('landing');

Route::get('/dashboard', function () {
    return redirect()->route('siswa.home');
})->name('dashboard');

Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::resource('kelas', ClassroomController::class)->names('admin.kelas');

    Route::resource('guru', TeacherController::class)->names('admin.guru');
    Route::prefix('guru')->group(function() {
        Route::get('/{id}/pelajaran', [TeacherController::class, 'subject'])->name('admin.guru.subject');
        Route::post('/{id}/pelajaran', [TeacherController::class, 'storeSubject'])->name('admin.guru.storeSubject');
    });

    Route::resource('siswa', StudentController::class)->names('admin.siswa');
    Route::prefix('siswa')->group(function() {
        Route::get('/{id}/pelajaran', [StudentController::class, 'subject'])->name('admin.siswa.subject');
        Route::post('/{id}/pelajaran', [StudentController::class, 'storeSubject'])->name('admin.siswa.storeSubject');
    });

    // Route::prefix('siswa')->group(function() {
    //     Route::get('/', function () {
    //         return view('admin.siswa.index');
    //     })->name('admin.siswa');
    //     Route::get('/add', function () {
    //         return view('admin.siswa.add');
    //     })->name('admin.siswa.add');
    // });

    Route::prefix('akun')->group(function() {
        Route::get('/', function () {
            return view('admin.akun');
        })->name('admin.akun');
    });
});

Route::prefix('guru')->middleware(['auth','guru'])->group(function () {
    Route::get('/', function () {
        return view('guru.home');
    })->name('guru.home');

    Route::prefix('absen')->group(function() {
        Route::get('/', function () {
            return view('guru.absen.index');
        })->name('guru.absen');
    });

    Route::prefix('jadwal')->group(function() {
        Route::get('/', function () {
            return view('guru.jadwal.index');
        })->name('guru.jadwal');
    });

    Route::prefix('tugas')->group(function() {
        Route::get('/', function () {
            return view('guru.tugas.index');
        })->name('guru.tugas');
    });

    Route::prefix('akun')->group(function() {
        Route::get('/', function () {
            return view('guru.akun.index');
        })->name('guru.akun');
    });
});

Route::prefix('siswa')->middleware(['auth','siswa'])->group(function () {
    Route::get('/', function () {
        return view('siswa.home');
    })->name('siswa.home');

    Route::prefix('absen')->group(function() {
        Route::get('/', function () {
            return view('siswa.absen.index');
        })->name('siswa.absen');
    });

    Route::prefix('akun')->group(function() {
        Route::get('/', function () {
            return view('siswa.akun.index');
        })->name('siswa.akun');
    });

    Route::prefix('jadwal')->group(function() {
        Route::get('/', function () {
            return view('siswa.jadwal.index');
        })->name('siswa.jadwal');
    });

    Route::prefix('tugas')->group(function() {
        Route::get('/', function () {
            return view('siswa.tugas.index');
        })->name('siswa.tugas');
    });
});

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('landing');
});

require __DIR__.'/auth.php';

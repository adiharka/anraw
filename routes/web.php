<?php

use Illuminate\Support\Facades\Route;
// Admin
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
// Guru
use App\Http\Controllers\guruKelasController;
use App\Http\Controllers\guruTugasController;
use App\Http\Controllers\guruAkunController;
// Siswa
use App\Http\Controllers\SiswaKelasController;
use App\Http\Controllers\SiswaTugasController;

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

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.home');

    Route::resource('kelas', ClassroomController::class)->names('admin.kelas');

    Route::resource('guru', TeacherController::class)->names('admin.guru');
    Route::prefix('guru')->group(function () {
        Route::get('/{id}/pelajaran', [TeacherController::class, 'subject'])->name('admin.guru.subject');
        Route::post('/{id}/pelajaran', [TeacherController::class, 'storeSubject'])->name('admin.guru.storeSubject');
        Route::delete('/{id}/{subject_id}', [TeacherController::class, 'destroySubject'])->name('admin.guru.destroySubject');
    });

    Route::resource('siswa', StudentController::class)->names('admin.siswa');
    Route::prefix('siswa')->group(function () {
        Route::get('/{id}/pelajaran', [StudentController::class, 'subject'])->name('admin.siswa.subject');
        Route::post('/{id}/pelajaran', [StudentController::class, 'storeSubject'])->name('admin.siswa.storeSubject');
    });

    Route::prefix('akun')->group(function () {
        Route::get('/', function () {
            return view('admin.akun');
        })->name('admin.akun');
    });
});

Route::prefix('guru')->middleware(['auth', 'guru'])->group(function () {
    Route::get('/', function () {
        return view('guru.home');
    })->name('guru.home');

    Route::resource('jadwal', guruKelasController::class)->names('guru.kelas');

    Route::resource('tugas', guruTugasController::class)->names('guru.tugas');

    Route::resource('akun', guruAkunController::class)->names('guru.akun');
});

Route::prefix('siswa')->middleware(['auth', 'siswa'])->group(function () {
    Route::get('/', function () {
        return view('siswa.home');
    })->name('siswa.home');

    Route::resource('jadwal', SiswaKelasController::class)->names('siswa.jadwal');

    Route::resource('tugas', SiswaTugasController::class)->names('siswa.tugas');

    Route::get('akun', [SiswaTugasController::class, 'akun'])->name('siswa.akun');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('landing');
});

require __DIR__ . '/auth.php';

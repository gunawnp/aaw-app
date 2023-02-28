<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogicController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StyleController;
use App\Http\Controllers\LogiccController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\LogiciiController;
use App\Http\Controllers\PretestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OneTrialController;
use App\Http\Controllers\PosttestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TwoTrialController;

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
    return view('welcome', [
        "title" => "Welcome",
    ]);
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/daftar', 'index')->middleware('guest');
    Route::post('/daftar', 'store');
});

Route::get('/home', function() {
    return view('home.index', [
        "title" => "Home",
        "header" => "Home"
    ]);
})->middleware('auth');

// uji coba

Route::get('/home/trials', function () {
    return view('home.trials', [
        "title" => "Home Trials",
        "header" => "Uji Coba"
    ]);
})->middleware('auth');

Route::controller(OneTrialController::class)->group(function () {
    Route::get('/home/trials-1', 'index')->middleware('auth');
    Route::get('/home/trials-1/begin', 'show')->middleware('auth');
    Route::post('/home/trials-1/begin', 'store')->middleware('auth');
});

Route::controller(TwoTrialController::class)->group(function () {
    Route::get('/home/trials-2', 'index')->middleware('auth');
    Route::get('/home/trials-2/begin', 'show')->middleware('auth');
    Route::post('/home/trials-2/begin', 'store')->middleware('auth');
});

// end uji coba

Route::controller(StyleController::class)->group(function () {
    Route::get('/home/styles', 'index')->middleware('auth');
    Route::get('/home/styles/begin', 'show')->middleware('auth');
    Route::post('/home/styles/begin', 'store')->middleware('auth');
    Route::get('/home/styles/score', 'score')->middleware('auth');
    Route::get('/home/styles/pref', 'pref')->middleware('auth');
    Route::get('/home/styles/result', 'result')->middleware('auth');
});

Route::controller(LogicController::class)->group(function () {
    Route::get('/home/logics/desc', 'index')->middleware('auth');
    Route::get('/home/logics/begin', 'show')->middleware('auth');
    Route::post('/home/logics/begin', 'store')->middleware('auth');
    Route::get('/home/logics/score', 'score')->middleware('auth');
});

Route::controller(LogiccController::class)->group(function () {
    Route::get('/home/logics2/desc', 'index')->middleware('auth');
    Route::get('/home/logics2/begin', 'show')->middleware('auth');
    Route::post('/home/logics2/begin', 'store')->middleware('auth');
});

Route::controller(PretestController::class)->group(function () {
    Route::get('/home/pretest', 'index')->middleware('auth');
    Route::post('/home/pretest', 'exone')->middleware('auth');
    Route::get('/home/pretest/begin', 'show')->middleware('auth');
    Route::post('/home/pretest/begin', 'store')->middleware('auth');
    // Route::get('/home/pretest/score', 'score')->middleware('auth');
});

Route::controller(MateriController::class)->group(function () {
    Route::get('home/materi', 'index')->middleware('auth');
    Route::get('home/materi/percabangan', 'nest')->middleware('auth');
    Route::get('home/materi/percabangan/exercise', 'exercise')->middleware('auth');
    Route::post('home/materi/percabangan/exercise', 'store')->middleware('auth');
    Route::get('home/materi/perulangan', 'loop')->middleware('auth');
    Route::get('home/materi/perulangan/exercise', 'exercisee')->middleware('auth');
    Route::post('home/materi/perulangan/exercise', 'storee')->middleware('auth');
});

// Route::controller(PosttestController::class)->group(function () {
//     Route::get('/home/posttest', 'index')->middleware('auth');
//     Route::post('/home/posttest', 'exone')->middleware('auth');
//     Route::get('/home/posttest/begin', 'show')->middleware('auth');
//     Route::post('/home/posttest/begin', 'store')->middleware('auth');
//     Route::get('/home/posttest/score', 'score')->middleware('auth');
// });

// Route::controller(LogiciiController::class)->group(function () {
//     Route::get('/home/logicsii', 'index')->middleware('auth');
//     Route::post('/home/logicsii', 'exone')->middleware('auth');
//     Route::get('/home/logicsii/next', 'indextwo')->middleware('auth');
//     Route::get('/home/logicsii/begin', 'show')->middleware('auth');
//     Route::post('/home/logicsii/begin', 'store')->middleware('auth');
//     Route::get('/home/logicsii/score', 'score')->middleware('auth');
// });

Route::controller(ProfileController::class)->group(function () {
    Route::get('/home/profile', 'index')->middleware('auth');
    Route::post('/home/profile/update', 'update')->middleware('auth');
    Route::post('/home/profile/delete', 'delete')->middleware('auth');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/home/admin', 'index')->middleware('admin');
    Route::get('/home/admin/dashboard', 'dashboard')->middleware('admin');
    Route::get('/home/admin/dashboard-2', 'dashboard_2')->middleware('admin');
});

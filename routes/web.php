<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TrendPendapatanTahunan;
use App\Http\Controllers\GrafikPenjualanGame;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/games/show/{id}', [GameController::class, 'show'])->name('admin.game.show');

Route::get('/game', function () {
    return view('game');
});

Route::get('/viewgame', function () {
    return view('viewgame');
});


Route::get('/library', function () {
    return view('library');
});
Route::get('/landingpage', function () {
    return view('landingpage');
});
Route::get('/transaction', function () {
    return view('admin/transaction');
});

Route::get('admin/create', function () {
    return view('admin/creategame');
});
Route::get('/editgame', function () {
    return view('admin/editgame');
});

Route::get('/view', function () {
    return view('admin/viewgameadmin');
});
Route::get('/user', function () {
    return view('admin/user');
});

// Route::post('/create', [GameController::class, 'store']);
// Route::get('game/{id}', [GameController::class, 'show']);
// Route::post('/edit', [GameController::class, 'edit']);
// Route::resource('game', GameController::class);
// Route::get('/editgame', [GameController::class, 'edit']);
// Route::get('editgame/{id}', [GameController::class, 'edit'])->name('editgame');

//Start Refactor
//gameuser
// Route::post('games', [GameController::class, 'user'])->name('views.games.user');
Route::get('games', [GameController::class, 'indexuser'])->name('views.games.indexuser');

Route::prefix('admin')->group(function () {
    //game
    Route::get('games', [GameController::class, 'indexuser'])->name('views.games.indexuser');

    Route::get('games', [GameController::class, 'index'])->name('admin.games.index');
    Route::get('/games/show/{id}', [GameController::class, 'show'])->name('admin.game.show');
    Route::get('games/create', [GameController::class, 'create'])->name('admin.games.create');
    Route::post('games', [GameController::class, 'store'])->name('admin.games.store');
    Route::get('games/{game}/edit', [GameController::class, 'edit'])->name('admin.games.edit');
    Route::put('games/{game}', [GameController::class, 'update'])->name('admin.games.update');
    Route::delete('games/{game}', [GameController::class, 'destroy'])->name('admin.games.destroy');


    //Transaction
    Route::get('/transactions', [TransactionController::class, 'index'])->name('admin.transactions.index');

    //Trend pendapatan tahunan
    Route::get('/trend-pendapatan-tahunan', [TrendPendapatanTahunan::class, 'index'])->name('admin.tren-pendapatan-tahunan.index');

    //Grafik penjualan games
    Route::get('/grafik-penjualan-game', [GrafikPenjualanGame::class, 'index'])->name('admin.grafik-penjualan-games.index');
});

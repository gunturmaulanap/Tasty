<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class GrafikPenjualanGame extends Controller
{
    public function index()
    {
        $games = Transaction::select('games.nama', DB::raw('COUNT(*) as jumlah_terjual'))
            ->join('games', 'transactions.id_game', '=', 'games.id')
            ->where('transactions.status', 'paid')
            ->groupBy('games.nama')
            ->orderBy('jumlah_terjual', 'DESC')
            ->get();

        return view('admin.grafik_penjualan_game', compact('games'));
    }
}

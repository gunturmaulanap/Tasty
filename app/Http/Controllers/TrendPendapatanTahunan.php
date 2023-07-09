<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TrendPendapatanTahunan extends Controller
{
    public function index()
    {
        $trends = Transaction::select(DB::raw('YEAR(created_at) AS year'), DB::raw('SUM(total_pembayaran) AS total'))
            ->where('status', 'paid')
            ->groupBy('year')
            ->orderBy('year', 'ASC')
            ->get();

        return view('admin.tren_pendapatan_tahunan', compact('trends'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, SUM(total_pembayaran) as total")
            ->whereYear('created_at', 2023)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months = $transactions->pluck('month')->toArray();
        $totals = $transactions->pluck('total')->toArray();

        $counts = Transaction::select('status', DB::raw('COUNT(*) as count'))
        ->groupBy('status')
        ->get();


        return view('admin.transaction', compact('months', 'totals', 'counts'));
    }
}

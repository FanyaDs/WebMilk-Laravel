<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return view('transaction.transaction', compact('transactions'));
    }

    public function cetak()
    {
        $transaction = Transaction::all();
        $pdf = Pdf::loadview('transaction.transaction-cetak', compact('transaction'));
        return $pdf->download('laporan-transaksi.pdf');
    }    
}
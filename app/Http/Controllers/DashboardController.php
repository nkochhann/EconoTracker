<?php

namespace App\Http\Controllers;

use App\Services\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function __invoke(Request $request, TransactionService $transactionService): Response
    {
        return Inertia::render('Dashboard', [
            'transactions' => $transactionService->getTransactions(
                Auth::user(), 
                (int) $request->only(['perPage']) ?? 10
            )
        ]);
    }
}

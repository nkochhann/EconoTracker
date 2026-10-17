<?php

namespace App\Services;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Pagination\CursorPaginator;


class TransactionService 
{
    public function getTransactions(User $user, int $perPage = 10): CursorPaginator
    {
        return Transaction::where("user_id", $user->id)
            ->orderBy("date", "desc")
            ->cursorPaginate($perPage);
    }

    public function createTransaction(User $user, array $data): Transaction
    {
        return Transaction::create([
            "value" => $data["value"],
            "description" => $data["description"],
            "from" => $data["from"]
        ]);
    }
}
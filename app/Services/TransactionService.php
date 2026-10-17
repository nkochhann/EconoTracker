<?php

use App\Models\Transaction;
use App\Models\User;

class TransactionService 
{
    public function getTransactions(User $user, int $perPage): Transaction
    {
        return Transaction::where("user_id", $user->id)
            ->orderBy("date", "desc")
            ->paginate($perPage);
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
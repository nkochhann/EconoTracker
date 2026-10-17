<?php

namespace Database\Seeders;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            "name" => "Nícolas Kochhann",
            "email" => "kochhann@gmail.com",
            "password" => "12345678",
        ]);

        Transaction::factory(5)->create([
            "user_id" => $user->id
        ]);
    }
}

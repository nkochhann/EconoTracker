<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $value
 * @property string $description
 * @property string $from
 * @property DateTime $date
 */
class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $fillable = ['value', 'description', 'from', 'date'];
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'date' => 'datetime'
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function isSpent(): bool
    {
        return $this->value < 0;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'payment_type',
        'status',
        'amount',
        'transaction_id',
        'payload',
    ];

    // Hubungan ke User (opsional)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

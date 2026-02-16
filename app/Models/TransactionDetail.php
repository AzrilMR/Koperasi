<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use App\Models\TransactionDetail;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_belanja',
        'total_diskon',
        'total_bayar',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
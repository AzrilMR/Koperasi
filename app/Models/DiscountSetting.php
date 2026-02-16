<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiscountSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'minimal_belanja',
        'persen_diskon',
        'diskon_maksimum',
        'is_active',
    ];
}
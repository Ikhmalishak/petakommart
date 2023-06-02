<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchase_item',
        'total_purchase_per_item',
        'total_purchase',
        'purchase_date',
        'purchase_time',
    ];
}

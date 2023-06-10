<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $primaryKey = 'itemID';

    protected $fillable = [
        'product_name',
        'quantity',
        'price',
        'amount',
        'stock',
    ];

    public function child()
    {
        return $this->hasMany(PaymentDetails::class,'itemID','itemID');
    }
}

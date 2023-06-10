<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    protected $table = 'payments_details';
    protected $fillable = ['item_name', 'item_quantity', 'item_price', 'item_total_price','itemID'];

    public function payment()
    {
        
    }
}
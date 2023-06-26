<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

<<<<<<< Updated upstream
    protected $primaryKey = 'itemID';

    protected $fillable = [
        'productcode',
=======
    protected $table = 'inventory';

    protected $fillable = [
>>>>>>> Stashed changes
        'product_name',
        'quantity',
        'price',
        'amount',
        'stock',
<<<<<<< Updated upstream
    ];
}
=======
    ];
}
>>>>>>> Stashed changes

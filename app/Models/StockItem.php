<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class StockItem extends Model
{
    protected $fillable = [
        'product_id', 'unit_price', 'quantity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}

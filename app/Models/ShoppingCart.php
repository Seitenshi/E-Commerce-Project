<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;
    protected $primaryKey = 'order_id';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'order_id',
        'prod_id',
        'prod_category',
        'prod_name',
        'prod_price',
        'quantity',
        'status', 
    ];
}

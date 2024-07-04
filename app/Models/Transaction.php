<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $primaryKey = 'transac_id';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'order_id',
        'date_ordered',
        'total',
        'method',
        'ship_addr',
        
    ];
}

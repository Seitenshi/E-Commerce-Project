<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'prod_id';
    public $timestamps = false;
    protected $fillable = [
        'prod_category',
        'prod_name',
        'prod_desc',
        'prod_price',
        'file_name',
    ];
}

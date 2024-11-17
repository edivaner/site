<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemCart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'cart_items';

    protected $fillable = [
        'cart_id',
        'product',
        'quantity',
    ];

    protected $hidden = ['id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_item_id',
        'user_id',
        'price',
        'gold_from',
        'gold_to'
    ];
}

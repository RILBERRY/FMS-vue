<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchases extends Model
{
    use HasFactory;
    protected $fillable = [
        'qty',
        'rate',
        'product',
        'pv_id',
        'stock_id',
        'closing_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    use HasFactory;
    protected $fillable = [
        'qty',
        'rate',
        'product',
        'invoice_id',
        'stock_id',
        'closing_id',
    ];
}

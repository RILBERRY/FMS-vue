<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dn extends Model
{
    use HasFactory;
    protected $fillable = [
        'dn_no',
        'billno',
        'date',
        'dn_status',
        'customer_id',
        'stock_id',
        'closing_id',
    ];
}

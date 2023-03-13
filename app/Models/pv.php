<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pv extends Model
{
    use HasFactory;
    protected $fillable = [
        'pv_no',
        'billno',
        'date',
        'pv_status',
        'supplyer_id',
        'stock_id',
        'closing_id',
    ];
}

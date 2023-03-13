<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payable extends Model
{
    use HasFactory;
    protected $fillable= [
        'method',
        'paid_date',
        'curr_type',
        'amount',
        'fund',
        'pv_id',
        'closing_id',
    ];
}

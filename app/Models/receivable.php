<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receivable extends Model
{
    use HasFactory;
    protected $fillable= [
        'method',
        'paid_date',
        'curr_type',
        'amount',
        'fund',
        'invoice_id',
        'closing_id',
    ];
}

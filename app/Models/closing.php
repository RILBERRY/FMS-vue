<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class closing extends Model
{
    use HasFactory;
    protected $fillable = [
        'date' ,
        'closingNo' ,
        'openning' ,
        'sales' ,
        'purchases', 
        'payments' ,
        'deposit' ,
        'withdwan' ,
        'a_balance' ,
        'balance' ,
        'is_confirm',
    ];
}

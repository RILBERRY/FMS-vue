<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fund extends Model
{
    use HasFactory;
    protected $fillable = [
        'fund_name',
        'curr_type',
        'balance',
        'last_updated',
        'assigned',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'c_name',
        'c_name_dh',
        'c_contact',
        'd_rate',
        'p_rate',
        'r_rate',
        'c_status',
    ];
}

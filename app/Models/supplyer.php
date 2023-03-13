<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplyer extends Model
{
    use HasFactory;
    protected $fillable = [
        'c_name',
        'rate',
        'c_name_dh',
        'c_contact',
        'c_status',
    ];
}

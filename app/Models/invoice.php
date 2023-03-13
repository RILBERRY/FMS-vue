<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\HasMany;

class invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'inv_no',
        'date',
        'billno',
        'duty_free_token',
        'inv_status',
        'customer_id',
        'stock_id',
        'closing_id',
    ];

    public function sales(): HasMany
    {
        return $this->hasMany(Sales::class, 'invoice_id');
    }
    public function customerInfo()
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }
}

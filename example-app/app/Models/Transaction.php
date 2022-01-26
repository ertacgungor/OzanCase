<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference_no', 
        'description',
        'merchant_id', 
        'customer_info_id',
        'acquirer_id', 
        'message',
        'code', 
        'status',
        'operation', 
        'payment_method',
        'error_code', 
        'amount',
        'original_currency'
    ]; 
}

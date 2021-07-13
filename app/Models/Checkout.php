<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'product_id', 'price', 'productPrice', 'productCost', 'full_name', 'email', 'address', 'city', 'zip', 'same_as_billing', 'State', 'payment_status', 'transaction_id', 'order_status'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'customer_contact',
        'equipment_details',
        'daily_rate',
        'rental_duration',
        'total_price',
        'status',
        'expires_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $table = 'equipments';
    protected $fillable = [
        'name',
        'serial_number',
        'description',
        'rental_price',
        'is_available',
        'photo',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

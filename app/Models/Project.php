<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'status',
        'user_id',
        'client',
        'budget',
        'file',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

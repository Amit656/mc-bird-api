<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'day',
        'month',
        'year',
        'email',
        'phone',
        'address',
    ];

    protected $casts = [
        'address' => 'array',
    ];
}

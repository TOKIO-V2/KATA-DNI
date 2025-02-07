<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class letter_dni extends Model
{
    use HasFactory;

    protected $fillable = [
        'letter_dni',
    ];
}
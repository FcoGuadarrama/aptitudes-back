<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'age',
        'results',
        'control_number',
        'current_career',
        'requested_career',
        
        'semester',
    ];
}

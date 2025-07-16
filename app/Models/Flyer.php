<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    
    protected $fillable = [
        'image',
        'caption',
        'is_active'
    ];
}

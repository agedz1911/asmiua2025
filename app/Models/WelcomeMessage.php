<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WelcomeMessage extends Model
{
    
    protected $fillable = [
        'name',
        'title',
        'image',
        'description',
        'is_active',
        'no_urut'
    ];
}

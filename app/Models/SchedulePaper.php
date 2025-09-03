<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchedulePaper extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'code_abstract',
        'name_participant',
        'title',
        'institution',
        'country',
        'date_presenter',
        'time_presenter',
        'room',
        'is_active',
    ];

    public function paperCategory(): BelongsTo
    {
        return $this->belongsTo(CategoryPaper::class, 'category_id', 'id');
    }
}

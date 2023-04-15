<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Award extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'percentage',
    ];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function show()
    {
        //if name is an url, then return image tag, else return text
        if (substr($this->name, 0, 4) == 'http') {
            return '<img src="' . $this->name . '" class="h-8" />';
        } else {
            return $this->name;
        }
    }
}

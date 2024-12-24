<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Gallery;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function gallery(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Galery;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description'
    ];

    public function galery(): HasMany
    {
        return $this->hasMany(Galery::class);
    }
}

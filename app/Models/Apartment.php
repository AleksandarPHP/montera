<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'apt_number',
        'floor',
        'pdf',
        'surface',
        'rooms',
        'status',
        'image',
        'image2',
    ];

}

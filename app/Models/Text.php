<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Text extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'meta_title',
        'meta_description',
        'title',
        'subtitle',
        'description',
        'title2',
        'subtitle2',
        'description2',
        'title3',
        'subtitle3',
        'description3',
        'title4',
        'subtitle4',
        'description4',
        'title5',
        'subtitle5',
        'description5',
        'title6',
        'subtitle6',
        'description6',
        'title7',
        'subtitle7',
        'description7',
        'image',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'image7'
    ];

    public $translatable = [
        'meta_title',
        'meta_description',
        'title',
        'subtitle',
        'description',
        'title2',
        'subtitle2',
        'description2',
        'title3',
        'subtitle3',
        'description3',
        'title4',
        'subtitle4',
        'description4',
        'title5',
        'subtitle5',
        'description5',
        'title6',
        'subtitle6',
        'description6',
        'title7',
        'subtitle7',
        'description7',
    ];
}

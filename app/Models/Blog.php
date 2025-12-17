<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'heading',
        'meta_description',
        'content',
        'slug',
        'tags',
        'main_image',
        'image_alt',
        'image',
        'status',
    ];
}

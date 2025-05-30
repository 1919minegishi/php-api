<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use Illuminate\Database\Eloquent\Model;

#[ApiResource]
class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'content',
        'published',
    ];
}

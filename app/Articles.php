<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $fillable = [
        'title',
        'image',
        'article_tags',
        'article_tags',
        'article_info'
    ];
    public $timestamps = false;
}

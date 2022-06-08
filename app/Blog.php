<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
    'id', 'blog_name','blog_photo', 'blog_description','blog_status'
];
}

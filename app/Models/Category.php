<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guqrded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}


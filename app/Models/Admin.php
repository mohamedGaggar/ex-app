<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $filable=[];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

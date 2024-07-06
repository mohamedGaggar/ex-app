<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=['title','price','attachment','url','admin_id'];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'post_user')->withPivot('status');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_post');
    }

}

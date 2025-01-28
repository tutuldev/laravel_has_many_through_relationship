<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function posts(){
        return $this->hasMany(related: Post::class);
    }

    public function country (){
        return $this->belongsTo(Country::class);
    }
}

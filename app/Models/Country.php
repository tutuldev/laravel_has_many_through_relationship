<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function users(){
        return $this->hasMany(User::class);
    }
    public function posts(){
        // if not create foreign and primary key befor migration
        // return $this->hasManyThrough(Post::class,User::class,'county_id','user_id','id','id');

        return $this->hasManyThrough(Post::class,User::class);
    }
}

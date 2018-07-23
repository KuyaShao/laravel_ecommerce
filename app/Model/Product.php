<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','stock','price','detail','discount'];
    public function review(){
        return $this->hasMany(Review::class);
    }
}

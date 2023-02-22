<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $with = ['tag '];
    

    public function booking(){
        return $this->hasMany(Booking::class);
    }
    public function tag(){
        return $this->belongsToMany(Tag::class);
    }
}

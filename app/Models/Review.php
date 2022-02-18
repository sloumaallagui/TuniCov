<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable=["content","nb_star"];

    function reviewerUser(){
        return $this->belongsTo(User::class);
     }
    function reviewedUser(){
        return $this->belongsTo(User::class);
    }
}

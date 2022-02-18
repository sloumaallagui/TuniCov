<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable=["content"];
    function user(){
        return $this->belongsTo(User::class);
     }

    public function cov()
    {
        return $this->belongsTo(Covoiturage::class,"cov_id","id");
    }
}

<?php

namespace App\Models;

use App\Models\Covoiturage;
use App\Models\DestPassage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;
    protected $fillable=["name"];
    function covoituragesDep(){
        return $this->hasMany(Covoiturage::class, 'dest_dep', 'id');
    }
    function covoituragesArrive(){
        return $this->hasMany(Covoiturage::class, 'dest_arrive', 'id');
    }
    function dest_passages(){
        return $this->belongsToMany(Covoiturage::class);
    }
}

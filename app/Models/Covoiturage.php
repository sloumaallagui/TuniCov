<?php

namespace App\Models;

use App\Models\User;
use App\Models\Place;
use App\Models\Question;
use App\Models\DestPassage;
use App\Models\ReqCovoiturage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Covoiturage extends Model
{
    use HasFactory;
    protected $fillable=["nombre","dest_dep","dest_arrive","dest_passage","prix","date","description","non_fummeur","femme_uniq","climatisé"];
    function user(){
    return $this->belongsTo(User::class);
    }
    function userReq(){
        return $this->hasMany(ReqCovoiturage::class,"cov_id","id");
        }
    function covQuestions(){
        return $this->hasMany(Question::class,"cov_id","id");
        }
    public function dest_deps()
        {
            return $this->belongsTo(Place::class,"dest_dep","id");
        }
    public function dest_arrives()
        {
            return $this->belongsTo(Place::class,"dest_arrive","id");
        }
        public function dest_passages()
        {
            return $this->belongsToMany(Place::class);
        }


}

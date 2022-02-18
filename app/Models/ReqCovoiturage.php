<?php

namespace App\Models;

use App\Models\User;

use App\Models\Covoiturage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReqCovoiturage extends Model
{
    use HasFactory;
    protected $fillable=["qty","place","status"];

    public function cov()
    {
        return $this->belongsTo(Covoiturage::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

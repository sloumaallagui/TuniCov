<?php

namespace App\Models;

use App\Models\Review;
use App\Models\ReqCovoiturage;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        "photo","date_naiss","adresse","description","tel","lastname","compte_fb","sexe"
    ];
    function covoiturages(){
        return $this->hasMany(Covoiturage::class, 'user_id', 'id');
    }
    function reqCov(){
        return $this->hasMany(ReqCovoiturage::class, 'user_id', 'id');
    }
    function userQuestions(){
        return $this->hasMany(Question::class, 'user_id', 'id');
    }
    function reviews(){
        return $this->hasMany(Review::class, 'reviewed_user_id', 'id');
    }
    function doReviews(){
        return $this->hasMany(Review::class, 'reviewer_user_id', 'id');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}

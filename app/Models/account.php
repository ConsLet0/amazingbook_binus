<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class account extends Authenticatable 
{

    use HasApiTokens, HasFactory, Notifiable;

    public function role(){
        return $this->belongsTo(role::class);
    }

    public function gender(){
        return $this->belongsTo(gender::class);
    }

    public function order(){
        return $this->hasMany(order::class);
    }

    // protected $fillable = [
    //     'first_name',
    //     'middle_name',
    //     'last_name',
    //     'email',
    //     'gender_id',
    //     'role_id',
    //     'image',
    //     'password'
    // ];

    protected $guarded = ['id'];
}

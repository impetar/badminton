<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Enums\RoleEnum;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'first_name',
        'last_name',
        'email', 
        'password'

    ];


    protected $hidden = [
        'password'
    ];

//definicija sve one to many table
    public function role() { return $this->belongsTo(Role::class); }
    public function Reservations() { return $this->hasMany(Reservation::class); }
    


    public function isAdmin() { return $this->role_id === RoleEnum::ADMIN; } // RoleEnum::ADMIN je 1
    public function isUser() { return $this->role_id === RoleEnum::USER; } // RoleEnum::USER je 2
    public function isGuest() { return $this->role_id === RoleEnum::GUEST; } // RoleEnum::GUEST je 3
}
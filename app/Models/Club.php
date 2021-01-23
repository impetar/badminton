<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $fillable = [
        'club_name'
    
   
    ];

    //definicija sve one to many table
    public function country() { return $this->belongsTo(Country::class); }
    public function reservations() { return $this->hasMany(Reservation::class); }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    protected $fillable = [
        'size', 
        'price',
        'description',
    ];
    public function reservations() { return $this->hasMany(Reservations::class); }


}

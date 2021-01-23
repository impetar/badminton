<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'native_name'
   
    ];
    //definicija sve one to many table
    public function clubs() { return $this->hasMany(clubs::class); }

}

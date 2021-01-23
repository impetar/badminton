<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 
        'description'
    ];


    //definicija sve one to many table
    public function users() { return $this->hasMany(User::class); }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
     'starts_at', 
     'ends_at'
   ];

   public function club() { return $this->belongsTo(Club::class); }
   public function terrain() { return $this->belongsTo(Terrain::class); }
   public function user() { return $this->belongsTo(User::class); }
   public function invoices() { return $this->hasMany(Invoice::class); }

} 



<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBMMeeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'name'
    ];

   public function tdm_races()
   {
       return $this->hasMany('App\Models\TBMRace');
   }

}

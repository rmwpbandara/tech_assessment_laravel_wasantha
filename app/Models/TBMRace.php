<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBMRace extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'name',
        'meeting_id'
    ];

   public function tbm_runners()
   {
       return $this->hasMany('App\Models\TBMRunner');
   }

   public function tbm_meeting()
   {
       return $this->belongsTo(TBMMeeting::class);
   }
}

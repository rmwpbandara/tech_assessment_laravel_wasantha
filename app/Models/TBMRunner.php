<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBMRunner extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'name'
    ];

   public function tdm_form_last_runners()
   {
       return $this->hasMany('App\Models\TBMFormLastRunner');
   }

   public function tdm_form_datas()
   {
       return $this->hasMany('App\Models\TBMFormData');
   }

   public function tdm_race()
   {
       return $this->belongsTo('App\Models\TBMRace');
   }

}

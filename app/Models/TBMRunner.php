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

   public function tbm_form_last_runners()
   {
       return $this->hasMany(TBMFormLastRunner::class);
   }

   public function tbm_form_datas()
   {
       return $this->hasMany(TBMFormData::class);
   }

   public function tbm_race()
   {
       return $this->belongsTo(TBMRace::class,'id');
   }

}

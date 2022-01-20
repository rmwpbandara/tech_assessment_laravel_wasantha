<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TBMFormData extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'name'
    ];

    public function tdm_runner()
    {
        return $this->belongsTo('App\Models\TBMRunner');
    }
}

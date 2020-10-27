<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsumptionCycle extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function cycle()
    {
        return $this->belongsTo('App\Models\Cycle');
    }
}

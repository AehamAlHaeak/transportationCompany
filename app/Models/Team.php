<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Team extends Pivot
{
    public $fillable=[
        "employe_id",
        "vehicle_id"
    ];
    protected $guarded;
}

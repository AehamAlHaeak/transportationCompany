<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Transport_team extends Pivot
{
    public $fillable=[
        "transport_proccess_id",
        "vehicle_id",
        "from",
        "to"
    ];
    protected $guarded;
}

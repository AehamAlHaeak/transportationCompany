<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CargoKind extends Pivot
{
    public $fillable=[
        "kind"
    ];
    protected $guarded;
}

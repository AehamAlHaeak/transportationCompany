<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class kind extends Pivot
{
    public $fillable=["kind"];
    protected $guarded;
}

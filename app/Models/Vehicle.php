<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    public $fillable=[
        "kind_id",
        "shaseh_Number",
        "length",
        "width",
        "max_load_weight",
        "max_load_width",
        "max_load_hight",
        "factory_id",
        "vehicle_id",
        "type",
        "actual_length",
        "status",
        "name",
        "vehicle_Number",
        "engine_Number",
        "totalWeight",
    ];
    protected $guarded;
}

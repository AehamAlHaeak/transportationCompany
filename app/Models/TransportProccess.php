<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransportProccess extends Model
{
    use HasFactory;
    public $fillable=[

        "type",
        "sorce",
        "destination",
        "sender_id",
        "resiver_id",
        "notes",
        "location",
        "resiving_time",
        "costs"
    ];
    protected $guarded;
}

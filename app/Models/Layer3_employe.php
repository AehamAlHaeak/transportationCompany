<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layer3_employe extends Model
{
    use HasFactory;
    public $fillable=[
        "name",
        "last_name",
        "country",
        "local_number",
        "birthDay",
        "work_place",
         "email",
        "phoneNumber",
        "specialization_id"
    ];
    protected $guarded;
}

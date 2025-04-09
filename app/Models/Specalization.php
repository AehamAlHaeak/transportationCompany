<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specalization extends Model
{
    use HasFactory;
   
    public $fillable=[
        "specialization"
    ];
    protected $guarded=[];
}

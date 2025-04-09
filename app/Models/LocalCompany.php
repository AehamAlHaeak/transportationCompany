<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalCompany extends Model
{
    use HasFactory;
    public $fillable=[
        "name",
        "location",
        "country_company_id"
    ];
    protected $guarded=[];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $table="factories";
    use HasFactory;
    public $fillable=[
        "name",
        "location",
        "local_company_id",
        "kind_id"
    ];
    protected $guarded;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layer2_employe extends Model
{
    use Notifiable;
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
        "specialization_id",
        "salary"
    ];
    protected $guarded=[];
    public function getWorkPlace(){
        return $this->belongsTo(CountryCompany::class,"work_place");
    }
    public function specialization(){
        return $this->belongsTo(Specalization::class,"specialization_id") ?? "no specialization";
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layer1_employe extends Model
{   
    use Notifiable;
    use HasFactory;
    public $fillable=[
        "name",
        "last_name",
        "country",
        "local_number",
        "birthDay",
        "email",
        "phoneNumber",
        "specialization_id",
        "salary"
    ];
    protected $guarded=[];
    public function getWorkPlace(){
        return "the head Company you are in World layer!";
    }
    public function specialization(){
        return $this->belongsTo(Specalization::class,"specialization_id");
    }
}

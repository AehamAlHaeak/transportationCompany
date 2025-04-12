<?php

namespace App\Traits;
use App\Models\Layer1_employe;
use App\Models\Layer2_employe;
use App\Models\Layer3_employe;
use App\Models\Layer4_employe;
trait storeData
{
   
 public function storeInModel($Model,$Data){
    //Data is an array of the model data
  $sotoredData=$Model::create($Data);
return $sotoredData;
 }
}

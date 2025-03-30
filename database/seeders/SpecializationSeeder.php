<?php

namespace Database\Seeders;

use App\Models\Specalization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specalization::creat([
          "specialization"=>"admin"

        ]);
        Specalization::creat([
            "specialization"=>"IT NET"
  
          ]);
          Specalization::creat([
            "specialization"=>"HR"
  
          ]);
          Specalization::creat([
            "specialization"=>"Heavy Truck Driver"
  
          ]);
          Specalization::creat([
            "specialization"=>"Mini Truck Driver"
  
          ]);
          Specalization::creat([
            "specialization"=>"Driver helper"
  
          ]);
          Specalization::creat([
            "specialization"=>"electrition"
  
          ]);
          Specalization::creat([
            "specialization"=>"mechanical"
  
          ]);
          Specalization::creat([
            "specialization"=>"SOS"
  
          ]);
          Specalization::creat([
            "specialization"=>"Loader"
  
          ]);
          Specalization::creat([
            "specialization"=>"Loading vehicle Driver"
  
          ]);
         
          Specalization::creat([
            "specialization"=>"Loader"
  
          ]);
          Specalization::creat([
            "specialization"=>"observer"
  
          ]);
          Specalization::creat([
            "specialization"=>"pilot"
  
          ]);
          Specalization::creat([
            "specialization"=>"helper pilot"
  
          ]);
          Specalization::creat([
            "specialization"=>"Ship driver"
  
          ]);
          Specalization::creat([
            "specialization"=>"navigator"
  
          ]);
          
          
    }
}

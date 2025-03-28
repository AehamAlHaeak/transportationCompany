<?php

namespace Database\Seeders;

use App\Models\CountryCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            CountryCompany::create([
                'name'=>"Syria Link",
                "location"=>"/Syrian/damascus"
            ]);
            CountryCompany::create([
                'name'=>"Jordan Link",
                "location"=>"/Jordan/Omman"
             ]);
             CountryCompany::create([
                'name'=>"Lebanon Link",
                "location"=>"/Lebanon/Birout"
           ]);


    }
}

<?php

namespace Database\Seeders;

use App\Models\LocalCompany;
use App\Models\CountryCompany;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocalCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocalCompany::create([
         'name'=>"Damascus link",
         "location"=>"Damascus/Doma",
         "type"=>"1",
         //dinamic id depending on the name of country Company
         "country_company_id"=>CountryCompany::where("name","Syria Link")->get("id")->first()->id

        ]);
        LocalCompany::create([
            'name'=>"Homus link",
            "location"=>"Homus/AlKhaledi'a",
            "type"=>"1",
            //dinamic id depending on the name of country Company
            "country_company_id"=>CountryCompany::where("name","Syria Link")->get("id")->first()->id
   
           ]);
           LocalCompany::create([
            'name'=>"Dara' link",
            "location"=>"Dara'/Jbab",
            "type"=>"1",
            //dinamic id depending on the name of country Company
            "country_company_id"=>CountryCompany::where("name","Syria Link")->get("id")->first()->id
   
           ]);
           LocalCompany::create([
            'name'=>"Birout link",
            "location"=>"Birout/center",
            "type"=>"1",
            //dinamic id depending on the name of country Company
            "country_company_id"=>CountryCompany::where("name","Lebanon Link")->get("id")->first()->id
   
           ]);
           LocalCompany::create([
            'name'=>"Omman link",
            "location"=>"Omman/center",
            "type"=>"1",
            //dinamic id depending on the name of country Company
            "country_company_id"=>CountryCompany::where("name","Jordan Link")->get("id")->first()->id
   
           ]);
    }
}

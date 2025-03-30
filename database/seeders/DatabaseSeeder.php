<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CountryCompany;
use App\Models\LocalCompany;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
       $this->call([
       CountryCompanySeeder::class,
       LocalCompanySeeder::class


       ]);


    }
}

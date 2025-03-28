<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('local_companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name")->unique();
            $table->string("location");
            $table->enum("type",[0,1,2,3,4,5,6,7]);
            /*
             000 adminstrator company,0
             001 ground ,1
             010 air,2
             011 air ground,3
             100 water,4
             101 water ground,5
             110 water air,6
             111 all,7
             */
            $table->unsignedBigInteger("country_company_id");
            $table->foreign("country_company_id")->references("id")->on("country_companies");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('local_companies');
    }
};

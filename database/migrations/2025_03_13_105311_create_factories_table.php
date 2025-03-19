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
        Schema::create('factories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->unsignedBigInteger("local_company_id");
            $table->foreign("local_company_id")->references("id")->on("local_companies");
            $table->string("location");

            /* has a complemint in new column below*/ 
            

                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factories');
    }
};

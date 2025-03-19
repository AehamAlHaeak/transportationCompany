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
        Schema::create('layer2_employes', function (Blueprint $table) {
            /* to transport in the same country all are adminstrators*/
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("last_name");
            $table->string("country");
            $table->string("local_number");
            $table->time("birthDay");
            $table->unsignedBigInteger("phoneNumber");
            $table->string("email");
            $table->unsignedBigInteger("work_place");
            $table->foreign("work_place")->references("id")->on("country_companies");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layer2_employes');
    }
};

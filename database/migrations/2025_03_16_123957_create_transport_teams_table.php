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
        Schema::create('transport_teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("transport_proccess_id");
            $table->foreign("transport_proccess_id")->references("id")->on("transport_proccesses");
            $table->unsignedBigInteger("vehicle_id");
            $table->foreign("vehicle_id")->references("id")->on("vehicles");
            $table->string("from");
            $table->string("to");

           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_teams');
    }
};

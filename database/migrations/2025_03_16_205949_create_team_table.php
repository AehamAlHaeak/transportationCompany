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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("employe_id")->unique();
            $table->foreign("employe_id")->references("id")->on("layer4_employes");
            $table->unsignedBigInteger("vehicle_id");
            $table->foreign("vehicle_id")->references("id")->on("vehicles");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

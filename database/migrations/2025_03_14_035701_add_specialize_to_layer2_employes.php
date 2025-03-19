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
        Schema::table('layer2_employes', function (Blueprint $table) {
            $table->unsignedBigInteger("specialization_id");
            $table->foreign("specialization_id")->references("id")->on("specalizations");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('layer2_employes', function (Blueprint $table) {
            $table->dropColumn("specialization_id");
        });
    }
};

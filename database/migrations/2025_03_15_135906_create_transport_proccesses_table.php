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
        Schema::create('transport_proccesses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum("type",["in same city","in same country","out of country"]);
            $table->string("sorce");
            $table->string("destination");
            $table->unsignedBigInteger("sender_id");
            $table->foreign("sender_id")->references("id")->on("users")->cascadeOnDelete();
            $table->unsignedBigInteger("resiver_id");
            $table->foreign("resiver_id")->references("id")->on("users");
            $table->text("notes");
            $table->string("location");
            $table->time("resiving_time");
            $table->unsignedBigInteger("costs");

          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_proccesses');
    }
};

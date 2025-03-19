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
        Schema::create('layer4_employes', function (Blueprint $table) {
            /* to lead in the factory process and send,ressive,load,fix then all are workers*/
            $table->id(); 
            $table->timestamps();
            $table->string("name");
            $table->string("last_name");
            $table->string("country");
            $table->string("local_number");
            $table->unsignedBigInteger("phoneNumber");
            $table->string("email");
            $table->time("birthDay");
            $table->unsignedBigInteger("work_place");
            $table->foreign("work_place")->references("id")->on("factories");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layer4_employes');
    }
};

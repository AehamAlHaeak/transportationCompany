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
        Schema::create('layer1_employes', function (Blueprint $table) {
            /* to universial transport all are adminstrators*/
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("last_name");
            $table->string("country");
            $table->string("local_number");
            $table->unsignedBigInteger("phoneNumber");
            $table->string("email");
            $table->time("birthDay");
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layer1_employes');
    }
};

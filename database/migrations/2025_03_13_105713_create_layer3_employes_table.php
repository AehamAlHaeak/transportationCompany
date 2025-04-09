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
        Schema::create('layer3_employes', function (Blueprint $table) {
            /* to transport in the same city all are adminstrators*/
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
                $table->foreign("work_place")->references("id")->on("local_companies");
                $table->double("salary");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layer3_employes');
    }
};

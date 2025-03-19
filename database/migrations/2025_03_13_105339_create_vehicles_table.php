<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->boolean("status");//0 is avilavle 1 is not
            $table->string("vehicle_Number")->unique();
            $table->string("engine_Number")->unique();
            $table->string("shaseh_Number")->unique();
            $table->double("length");
            $table->double("width");
            /*1- length and width are constants in the vehicle and don't able to modefing 
              2- the cargo width most not to be more than the veficle 
              
              */
            $table->double("actual_length")->nullable();//the vehicale may by more than one part as tran or truck




            $table->double("totalWeight");//with the cargo and load
            $table->double("max_load_weight");
            $table->double("max_load_width");
            $table->double("max_load_hight");
            /* max load weight and width and hight are very important to determine the capacity of
            the vehicle and to load it by minimize the cost and choise the switable 
            vehivles for the transport prccess*/ 
            $table->unsignedBigInteger("factory_id")->nullable();/*may be in the road !!
             and it able to echanging because the vehicale will move from palce to another on the map
             then it may be now in damas factory after some hoers will be in homs factory and damas 
             resive new vehicles to leve or remine in it  */
            $table->foreign("factory_id")->references("id")->on("factories");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};

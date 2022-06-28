<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DPEPS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('DPEPS',
        function(Blueprint $table)
        {
            $table->id();
            $table->string ("nomDPEPS",30)-> unique();
            $table->string("nom1erRespDPEPS",100);
            $table->string("prenom1erRespDPEPS",100);
            $table->string("Emploi1erRespDPEPS",100);
            $table->string("titreHonor1respDPEPS",100);         
            $table->integer("DREPS");
            $table->foreign("DREPS")
                  ->references("id")
                  ->on("DREPS")
                  ->onUpdate("restrict")
                  ->onDelete("restrict");
        }
    
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DPEPS');
    }
}

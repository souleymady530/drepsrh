<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DREPS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('DREPS',
        function(Blueprint $table)
        {
            $table->id();
            $table->string ("nomDREPS",30)-> unique();
            $table->string("nom1erResponsable",100);
            $table->string("prenom1erResponsable",100);
            $table->string("Emploi1erResponsable,100");
            $table->string("titreHonorifique1resp,100");         
  
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
        Schema::dropIfExists('DREPS');
    }
}

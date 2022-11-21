<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Actualites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('Actualites',
        function(Blueprint $table)
        {
            $table->id();
            $table->string ("chemin",100);
            $table->string("titre",250);
            $table->string("resume1",250);
            $table->string("resume2",250);
            $table->string("resume3",250);
            $table->string("resume4",250);
            $table->string("datePublication");         
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Actualites');  
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Annonce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('Annonces',
        function(Blueprint $table)
        {
            $table->id();
            $table->string ("chemin",100);
            $table->string("titre",250);
            $table->date("datePublication");
            $table->string("tailleFichier");
                 
           
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
        Schema::dropIfExists("Annonces");
    }
}

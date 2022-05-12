<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AutresTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //CREATION DE LA TABLE COMMUNE
        Schema:: create('Commune',
        function(Blueprint $table)
        {
            $table->id();
            $table->string("nomCommune",30);
            $table->integer("DPEPS");
            $table->foreign("DPEPS")
                  ->references("id")
                  ->on("DPEPS")
                  ->onUpdate("restrict")
                  ->onDelete("restrict");
        }
        );
        //CREATION DE LA TABLE LOCALITE
        Schema:: create('Localite',
        function(Blueprint $table)
        {
            $table->id();
            $table->string("nomLocalite",30);
            $table->integer("Commune");
            $table->foreign("Commune")
                  ->references("id")
                  ->on("Commune")
                  ->onUpdate("restrict")
                  ->onDelete("restrict");
        }
        );
        //CREATION DE LA TABLE LIEU DE TRAVAIL
        Schema:: create('LieuDeTravail',
        function(Blueprint $table)
        {
            $table->id();
            $table->string("nomLieuDeTravail",50);
            $table->string("TypeLieuDeTravail",30);
            $table->integer("Localite");
            $table->foreign("Localite")
                  ->references("id")
                  ->on("Localite")
                  ->onUpdate("restrict")
                  ->onDelete("restrict");
        }
        );
        //CREATION DE LA TABLE EMPLOI
        Schema::create('Emploi',
        function(Blueprint $table)
        {
            $table->id();
            $table->string("NomEmploi",50);
            
        }
        );
        //CREATION DE LA TABLE FONCTION
        Schema::create('Fonction',
        Function(Blueprint $table)
        {
            $table->id();
            $table->string("NomFonction",50);
        }
        );
        //CREATION DE LA TABLE DIPLÔMEACCADEMIQUE
        Schema::create('DiplomeAccademique',
        Function(Blueprint $table)
        {
            $table->id();
            $table->string("NomDiplome",50);
        }
        );
        //CREATION DE LA TABLE CATEGORIE
        Schema::create('Categorie',
        Function(Blueprint $table)
        {
            $table->id();
            $table->string("NomCategorie",4);
        }
        );
        //CREATION DE LA TABLE TYPEDEPERSONNEL
        Schema::create('TypePersonnel',
        Function(Blueprint $table)
        {
            $table->id();
            $table->string("TypePersonnel",4);
        }
        );
        //CREATION DE LA TABLE ECHELLE
        Schema::create('Echelle',
        Function(Blueprint $table)
        {
            $table->id();
            $table->string("NomEchelle",4);
        }
        );
        //CREATION DE LA TABLE ECHELLON
        Schema::create('Echellon',
        Function(Blueprint $table)
        {
            $table->id();
            $table->string("NomEchellon",4);
        }
        );
        //CREATION DE LA TABLE AGENT
        Schema:: create('Agent',
        function(Blueprint $table)
        {
            $table->id();
            $table->string("matriculeAgent",50);            
            $table->string("nomAgent",100);
            $table->string("prenomAgent",200);
            $table->string("sexeAgent",20);
            $table->date("DateDeNaissanceAgent");
            $table->date("DateDerniereDecoration");
            $table->string("Titrehonorifique");
            $table->date("DateIntegrationFP");
            $table->date("DatePriseServiceLieuTravail");
            $table->date("DatePriseServiceProvinceRegion");
            $table->string("LieuDeNaissanceAgent");

            $table->integer("TypeDePersonnel");
            $table->foreign("TypeDePersonnel")
                  ->references("id")
                  ->on("TypePersonnel")
                  ->onUpdate("restrict")
                  ->onDelete("restrict");            
            
            $table->integer("LieuDeTravailAgent");
            $table->foreign("LieuDeTravailAgent")
                  ->references("id")
                  ->on("LieuDeTravail")
                  ->onUpdate("restrict")
                  ->onDelete("restrict");
            
            $table->integer("EmploiAgent");
            $table->foreign("EmploiAgent")
                  ->references("id")
                  ->on("Emploi")
                  ->onUpdate("restrict")
                  ->onDelete("restrict");
            
            $table->integer("FonctionAgent"); 
            $table->foreign("FonctionAgent") 
                  ->references("id")
                  ->on("Fonction")
                  ->onUpdate("restrict")
                  ->onDelete("restrict");   
                  
            $table->integer("DernierDiplomeAccademique"); 
            $table->foreign("DernierDiplomeAccademique") 
                  ->references("id")
                  ->on("DiplomeAccademique")
                  ->onUpdate("restrict")
                  ->onDelete("restrict"); 
                  
            $table->integer("CategorieAgent"); 
            $table->foreign("CategorieAgent") 
                  ->references("id")
                  ->on("Categorie")
                  ->onUpdate("restrict")
                  ->onDelete("restrict"); 
                  
            $table->integer("EchelleAgent"); 
            $table->foreign("EchelleAgent") 
                  ->references("id")
                  ->on("Echelle")
                  ->onUpdate("restrict")
                  ->onDelete("restrict"); 
                  
            $table->integer("EchellonAgent"); 
            $table->foreign("EchellonAgent") 
                  ->references("id")
                  ->on("Echellon")
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
        Schema::dropIfExists('Commune');
        Schema::dropIfExists('Localite');
        Schema::dropIfExists('Emploi');
        Schema::dropIfExists('LieuDeTravail'); 
        Schema::dropIfExists('DiplomeAccademique');
        Schema::dropIfExists('Categorie');
        Schema::dropIfExists('TypePersonnel');
        Schema::dropIfExists('Echelle');
        Schema::dropIfExists('Echellon');        
        Schema::dropIfExists('Agent');                                               
    }
}

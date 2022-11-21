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
        Schema:: create('Ministeres',
        function(Blueprint $table)
        {
            $table->id();
            $table->string ("nomMinistere",250)-> unique();
            $table->string("nom1erResponsable",100);
            $table->string("prenom1erResponsable",100);
            $table->string("Emploi1erResponsable",100);
            $table->string("titreHonorifique1resp",100);         
  
        });


        Schema:: create('DREPS',
        function(Blueprint $table)
        {
            $table->id();
            $table->string ("nomDREPS",30)-> unique();
            $table->string("nom1erResponsable",100);
            $table->string("prenom1erResponsable",100);
            $table->string("Emploi1erResponsable",100);
            $table->string("titreHonorifique1resp",100);         
  
        });

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
        });
    

        Schema::create("etablissements",function(Blueprint $table)
        {
            $table->id();
            $table->string("nomEtablissement");
            $table->string("localite",50);
            
            $table->integer("idDpeps");
            $table->foreign("idDpeps")
                  ->references("id")
                  ->on("DPEPS")
                  ->onUpdate("restrict")
                  ->onDelete("restrict");
        });

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
            $table->string("TypeDePersonnel");
            $table->string("LieuDeTravailAgent");
            $table->string("EmploiAgent");
            $table->string("FonctionAgent");     
            $table->string("DernierDiplomeAccademique"); 
            $table->string("CategorieAgent");    
            $table->string("EchelleAgent");   
            $table->string("EchellonAgent"); 
            $table->string("TypeAgent");
            $table->integer("idCreateur");
          

               // $table->string("code");
                 
                                 
        });  



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
            $table->string("TypePersonnel",30);
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
        Schema::dropIfExists('DREPS'); 
        Schema::dropIfExists('DPEPS');  
        Schema::dropIfExists('etablissements');                                         
    }
}

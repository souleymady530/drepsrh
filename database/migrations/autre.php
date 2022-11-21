
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
         
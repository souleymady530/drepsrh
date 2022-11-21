<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    /*
     $table->id();
            $table->string ("chemin",100);
            $table->string("titre",250);
            $table->string("resume1",250);
            $table->string("resume2",250);
            $table->string("resume3",250);
            $table->string("datePublication");    
    */
    public $table="Actualites";
    protected $fillable=
    [
      'id',
      'datePublication',
      'resume3',
      'resume4',
      'resume2',
      'resume1',
      'resume',
      'titre',
      'chemin',
      
    ];

    public $timestamps=false;

}

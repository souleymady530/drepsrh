<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;
    public $table="Annonces";
    protected $fillable=
    [
      'id',
      'datePublication',
      'titre',
      'chemin',
      'tailleFichier',
      
    ];

    public $timestamps=false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dreps extends Model
{
    use HasFactory;
    public $table="dreps";
    protected $fillable=
    [
    'id',
    'nomDREPS',
    'nom1erResponsable',
    'prenom1erResponsable',
    'emploi1erResponsable',
    'titreHonorifique1resp',
    ];
    public $timestamps=false;
}

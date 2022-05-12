<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dpeps extends Model
{
    use HasFactory;
    public $table="dpeps";
    protected $fillable=
    [
    'id',
    'nomDPEPS',
    'nom1erRespDPEPS',
    'prenom1erRespDPEPS',
    'Emploi1erRespDPEPS',
    'titreHonor1respDPEPS',
    'DREPS',
    ];
    public $timestamps=false;
}

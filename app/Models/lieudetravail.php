<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lieudetravail extends Model
{
    use HasFactory;
    public $table="lieudetravail";
    protected $fillable=
    [
    'id',
    'nomLieuDeTravail',
    'TypeLieuDeTravail',
    'Localite',
    ];
    public $timestamps=false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localite extends Model
{
    use HasFactory;
    public $table="localite";
    protected $fillable=
    [
    'id',
    'nomLocalite',
    'Commune',
    
    ];
    public $timestamps=false;
}

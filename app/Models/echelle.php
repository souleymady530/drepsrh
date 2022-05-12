<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class echelle extends Model
{
    use HasFactory;
    public $table="echelle";
    protected $fillable=
    [
    'id',
    'NomEchelle',
    ];
    public $timestamps=false;
}

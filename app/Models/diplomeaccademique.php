<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diplomeaccademique extends Model
{
    use HasFactory;
    public $table="diplomeaccademique";
    protected $fillable=
    [
    'id',
    'NomDiplome',
    ];
    public $timestamps=false;
}

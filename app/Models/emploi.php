<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emploi extends Model
{
    use HasFactory;
    public $table="emploi";
    protected $fillable=
    [
    'id',
    'NomEmploi',
    ];
    public $timestamps=false;
}

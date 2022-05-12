<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class echellon extends Model
{
    use HasFactory;
    public $table="echellon";
    protected $fillable=
    [
    'id',
    'NomEchellon',
    ];
    public $timestamps=false;
}

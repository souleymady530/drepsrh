<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fonction extends Model
{
    use HasFactory;
    public $table="fonction";
    protected $fillable=
    [
    'id',
    'NomFonction',
    ];
    public $timestamps=false;
}

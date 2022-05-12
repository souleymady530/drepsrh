<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typepersonnel extends Model
{
    use HasFactory;
    public $table="typepersonnel";
    protected $fillable=
    [
    'id',
    'TypePersonnel',
    
    ];
    public $timestamps=false;
}

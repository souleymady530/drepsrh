<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commune extends Model
{
    use HasFactory;
    public $table="commune";
    protected $fillable=
    [
    'id',
    'nomCommune',
    'DPEPS',
    ];
    public $timestamps=false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gatinhosz extends Model
{
    use HasFactory;
    protected $fillable =[
        'racaGatinho',
        'corGatinho',
        'nomeDono',
        'caracteristica',
        'pelagem'
    ];
}

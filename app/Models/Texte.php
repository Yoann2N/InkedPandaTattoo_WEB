<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Texte extends Model
{
    use HasFactory;

    protected $fillable = [
        'horaires',
        'adresse',
        'equipe-professionnelle',
        'biographie-studio',
    ];
}

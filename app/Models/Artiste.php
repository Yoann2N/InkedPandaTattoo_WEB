<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Artiste extends Model
{
    use HasFactory;
    //Pour l'injection en masse 
    protected $fillable = [
        'user_id',
        'profession',
        'style',
        // 'telephone',
        'pseudo',
        'bio',
        // 'adresse',
        'instagram',
        'facebook',
        'banniereUrl',
        'vignetteUrl',
        'css',
    ];

    public function realisations()
    {
        return $this->hasMany(Realisation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

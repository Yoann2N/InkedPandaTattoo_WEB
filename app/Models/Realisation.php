<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Artiste;

class Realisation extends Model
{
    use HasFactory;
    public function artiste()
    {
        return $this->belongsTo(Artiste::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vue extends Model
{
    protected $table = 'vues';
    public $timestamps = false;
    protected $fillable = ['artiste_id', 'ip', 'created_at'];
}

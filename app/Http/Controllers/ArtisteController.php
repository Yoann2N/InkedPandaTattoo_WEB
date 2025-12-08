<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtisteController extends Controller
{
    public function show($pseudo)
    {
        $artiste = Artiste::where('pseudo', $pseudo)->firstOrFail();

        return view('artistes.show', compact('artiste'));
    }
}

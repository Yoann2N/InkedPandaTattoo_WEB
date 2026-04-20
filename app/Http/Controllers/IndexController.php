<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Artiste;
use App\Models\Vue;
use App\Models\Texte;

class IndexController extends Controller
{
    public function index(): View
    {
        $artistes = Artiste::all();
        $textes = Texte::all();
        
        return view('index', compact('artistes', 'textes'));
    }

    public function store(): View
    {
        // Enregistrement des textes modifiés (exemple avec les trois premiers textes)
        $textes = Texte::all();
        foreach ($textes as $texte) {
            $inputName = 'texte_' . $texte->titre;
            if (request()->has($inputName)) {
                $texte->contenu = request()->input($inputName);
                $texte->save();
            }
        }
    
    
        $artistes = Artiste::all();
        $textes = Texte::all();
        
        return view('index', compact('artistes', 'textes'));
    }   

    public function artiste(string $pseudo): View
    {
        $artiste = Artiste::where('pseudo', $pseudo)->firstOrFail();
        $artistes = Artiste::limit(6)->get();

        $ip = request()->ip();
        $cacheKey = 'vue_artiste_' . $artiste->id . '_' . $ip;

        // Si la clé n'existe pas dans le cache, on enregistre la vue
        if (!Cache::has($cacheKey)) {
            Vue::create([
                'artiste_id' => $artiste->id,
                'ip' => $ip,
                'created_at' => now(),
            ]);

            // Bloque pendant 24h
            Cache::put($cacheKey, true, now()->addHours(24));
        }

        return view('artiste', compact('artiste','artistes'));
    }
}
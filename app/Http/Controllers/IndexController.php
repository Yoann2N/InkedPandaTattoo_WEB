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

    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|max:2048'
        ]);

        $path = $request->file('file')->store('images', 'public');

        return response()->json([
            'location' => asset('storage/' . $path)
        ]);
    }

    public function artiste(string $pseudo): View
    {
        $artiste = Artiste::where('pseudo', $pseudo)->firstOrFail();
        $artistes = Artiste::limit(6)->get();

        $ip = request()->ip();
        $cacheKey = 'vue_artiste_' . $artiste->id . '_' . $ip;

        if (!Cache::has($cacheKey)) {
            Vue::create([
                'artiste_id' => $artiste->id,
                'ip' => $ip,
                'created_at' => now(),
            ]);

            Cache::put($cacheKey, true, now()->addHours(24));
        }

        return view('artiste', compact('artiste', 'artistes'));
    }
}
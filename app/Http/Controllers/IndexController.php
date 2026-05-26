<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use App\Models\Artiste;
use App\Models\Vue;
use App\Models\Texte;
use App\Mail\ContactMail;

class IndexController extends Controller
{
    public function index(): View
    {
        $artistes = Artiste::all();
        $textes = Texte::all();
        
        return view('index', compact('artistes', 'textes'));
    }

    public function store(Request $request)
    {
        $textes = Texte::all();
        foreach ($textes as $texte) {
            $inputName = 'texte_' . $texte->slug;
            if ($request->has($inputName)) {
                $texte->contenu = $request->input($inputName);
                $texte->save();
            }
        }

        return redirect()->route('index');
    }

    public function contact(Request $request)
    {
        $request->validate([
            'nom'     => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        $destinataire = $request->input('destinataire', config('mail.from.address'));

        Mail::to($destinataire)->send(new ContactMail(
            $request->nom,
            $request->email,
            $request->message
        ));

        return back()->with('contact_success', 'Votre message a bien été envoyé !');
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

    public function updateArtiste(Request $request, string $pseudo)
    {
        $artiste = Artiste::where('pseudo', $pseudo)->firstOrFail();

        if ($request->has('bio')) {
            $artiste->bio = $request->input('bio');
            $artiste->save();
        }

        return redirect()->route('artiste', $pseudo);
    }
}
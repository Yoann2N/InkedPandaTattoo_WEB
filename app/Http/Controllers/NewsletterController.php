<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nom'    => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email'  => 'required|email|unique:newsletters,email',
    ]);

    Newsletter::create($request->only('nom', 'prenom', 'email'));

    return response()->json(['message' => 'Inscription réussie !']);
}

public function index()
{
    $abonnes = Newsletter::orderBy('created_at', 'desc')->get();
    return view('fichiers-clients', compact('abonnes'));
}

public function destroy(string $id)
{
    Newsletter::findOrFail($id)->delete();
    return redirect()->route('newsletter.index')->with('success', 'Abonné supprimé.');
}
}

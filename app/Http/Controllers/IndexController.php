<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Artiste;

class IndexController extends Controller
{
    public function index(): View
    {
        $artistes = Artiste::all();
        return view('index', compact('artistes'));
    }

    public function artiste(string $pseudo): View
    {
        $artiste = Artiste::where('pseudo', $pseudo)->firstOrFail();
        $artistes = Artiste::limit(6)->get();
        return view('artiste', compact('artiste','artistes'));
    }
}

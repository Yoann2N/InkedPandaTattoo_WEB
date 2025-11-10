<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Artiste;

class IndexController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function artiste(string $pseudo): View
    {
        $artiste = Artiste::where('pseudo', $pseudo)->firstOrFail();
        return view('artiste', compact('artiste'));
    }
}

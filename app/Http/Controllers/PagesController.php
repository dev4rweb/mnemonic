<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
    {
        $cards = Card::orderBy('id', 'desc')->paginate(20);
        return Inertia::render('HomePage', [
            'cards' => $cards
        ])->withViewData(['meta' => 'Some meta']);
    }
}

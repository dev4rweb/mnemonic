<?php

namespace App\Http\Controllers;

use App\Filters\CardFilter;
use App\Models\Card;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index(CardFilter $filter)
    {
        $cardCategories = Card::all();
        $categories = array();
        foreach ($cardCategories as $card) {
            if (!in_array($card->category, $categories, true)) {
                array_push($categories, $card->category);
            }
        }
        $cards = Card::filter($filter)->paginate($filter->request['pagination']);
        return Inertia::render('HomePage', [
            'cards' => $cards,
            'categories' => $categories
        ])->withViewData(['meta' => 'Some meta']);
    }
}

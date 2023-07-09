<?php

namespace App\Http\Controllers;

use App\Models\Game;

class TwoViewsController extends Controller
{
    public function index()
    {
        // $game = game::orderBy('nama', 'harga')->paginate(10);
        // return view('game.viewadmin')->with('game', $game);

        //Refactor code
        $games = Game::all();
        return view('admin.viewgameadmin', compact('games'));
    }

    public function show()
    {
        return view('view2');
    }
}

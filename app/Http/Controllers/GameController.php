<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

use Illuminate\Http\View;
use Symfony\Component\HttpFoundation\Session\Session;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // $game = game::orderBy('nama', 'harga')->paginate(10);
        // return view('game.viewadmin')->with('game', $game);

        //Refactor code
        $games = Game::all();
        return view('admin.viewgameadmin', compact('games'));
    }
    public function share()
    {
        //its just a dummy data object.
        $games = Game::all();

        // Sharing is caring
        Game::share('game', $games);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //Refactor code
        return view('admin.creategame');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $game = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'os' => $request->os,
            'processor' => $request->processor,
            'memory' => $request->memory,
            'storage' => $request->storage,
            'direct_x' => $request->direct_x,
            'graphics' => $request->graphics,
            'image' => $request->image
        ];

        Game::create($game);
        return redirect()->route('admin.games.index')->with('succes', 'berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $game = Game::find($id);

        return view('admin.gameshow', ['game' => $game]);
    }
    public function user($id)
    {
        $game = Game::find($id);

        return view('views.gameshow', ['game' => $game]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {


        //Refactor code
        return view('admin.editgame', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the game record
        $game = Game::findOrFail($id);

        // Update the game attributes
        $game->nama = $request->nama;
        $game->deskripsi = $request->deskripsi;
        $game->harga = $request->harga;
        $game->os = $request->os;
        $game->processor = $request->processor;
        $game->memory = $request->memory;
        $game->storage = $request->storage;
        $game->direct_x = $request->direct_x;
        $game->graphics = $request->graphics;
        $game->image = $request->image;
        // Save the updated game
        $game->save();

        return redirect()->route('admin.games.index')->with('success', 'Game updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('admin.games.index')->with('success', 'Game deleted successfully.');
    }
}

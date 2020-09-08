<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Model\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    public function index()
    {
        // if (Auth::guard('player')->check()) {
        //     $game = Game::select('name', 'platform')->get();
        //     // \dd($game);
        //     return \view('player.profile');
        // } else {
        //     \dd('hahah');
        // }

        // return \view('player.profile');

    }
    // public function listTrounament()
    // {
    //     $game = Game::select('name', 'platform')->get();
    //     \dd($game);
    // }
}

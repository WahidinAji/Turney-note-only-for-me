<?php

namespace App\Http\Controllers;

use App\Model\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FriendController extends Controller
{
    // public function search(Request $request)
    // {
    //     // $query = $request->get('search');
    //     // $hasil = Player::where('name', 'LIKE', '%' . $query . '%')->paginate(10);

    //     // \dd($hasil);
    //     // return view('result', compact('hasil', 'query'));
    //     return \view('friend.index');
    // }
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $players = Player::where('name', 'LIKE', '%' . $request->cari . '%')->get();
            // \dd($players);
            return \view('friend.index', \compact('players'));
        } else {
            // $players = Player::all();
            $players = DB::table('players')
                ->join('friends', 'players.id', '=', 'friends.player_one')
                ->orWhere('players.id', '=', 'friends.player_two')
                ->select('players.*', 'friends.*')->get();
            // \dd($players);
            return \view('friend.index', \compact('players'));

            // $players = DB::table('')
        }
    }
}

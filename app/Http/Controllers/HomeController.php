<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $users = User::with('country', 'state', 'city')->find(Auth::id());

        return view('home', compact('users'));
    }

    public function countriesstate(Request $request)
    {
        $states = State::where('country_id', $request->countries_id)->get();
        return response()->json($states);
    }

    public function statebycity(Request $request)
    {
        $states = City::where('state_id', $request->states_id)->get();
        return response()->json($states);
    }
}

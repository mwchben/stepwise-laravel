<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    //to fetch posts for that specific user that has logged in.....
    public function index()
    {
        $user_id = auth()->user()->id; 
        $user = User::find($user_id);
        return view('home')->with('posts', $user->posts); //give posts specific to the logged user
    }
    
    public function showAllUsers(){
        $users = User::all();
        return view('welcome', compact('users'));
    }
}

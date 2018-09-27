<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserDetails;
use Auth;

class IndexController extends Controller
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
     * Redirect to login page
     *
     * @return Illuminate\Support\Facades\Redirect
     */
    public function index()
    {
        return redirect()->route('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $users = UserDetails::all();
        return view('index', ['data' => $users]);
    }

    public function getAllDetails($user_id)
    {
        $user = UserDetails::find($user_id);
        if(!$user) 
        {
            abort(404);
        }
        return view('details', ['data' => $user]);
    }

    public function getApiToken()
    {
        $user = Auth::user();
        $token = $user->createToken('Token Name')->accessToken;
        return view('api', ['data' => $token]);
    }
}

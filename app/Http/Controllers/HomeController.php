<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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


    public function logout () {
        Log::debug(__METHOD__ . ": BOF");
        Auth::logout();
        Log::debug(__METHOD__ . ": EOF");
        return Redirect()->route('login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Log::debug(__METHOD__ . ": BOF");
        $user = Auth::user();
        Log::debug(__METHOD__ . ": EOF");
        return view('user.index', ['user' => $user]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        Log::debug(__METHOD__ . ": BOF");
        $user = Auth::user();
        Log::debug(__METHOD__ . ": EOF");
        return view('admin.index', ['user' => $user]);
    }

}

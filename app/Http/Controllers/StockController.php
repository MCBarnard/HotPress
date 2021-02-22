<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StockController extends Controller
{
    public function all () {
        $user = Auth::user();
        return view('admin.stock.index', ['user' => $user]);
    }
}

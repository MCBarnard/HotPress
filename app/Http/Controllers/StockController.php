<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class StockController extends Controller
{
    public function all () {
        Log::debug(__METHOD__ . ": BOF");
        $user = Auth::user();
        Log::debug(__METHOD__ . ": EOF");
        return view('admin.stock.index', ['user' => $user]);
    }
}

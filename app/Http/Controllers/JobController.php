<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class JobController extends Controller
{
    public function completed () {
        Log::debug(__METHOD__ . ": BOF");
        $user = Auth::user();
        Log::debug(__METHOD__ . ": EOF");
        return view('admin.jobs.completed', ['user'=> $user]);
    }

    public function cancelled () {
        Log::debug(__METHOD__ . ": BOF");
        $user = Auth::user();
        Log::debug(__METHOD__ . ": EOF");
        return view('admin.jobs.cancelled', ['user'=> $user]);
    }

    public function inProgress () {
        Log::debug(__METHOD__ . ": BOF");
        $user = Auth::user();
        Log::debug(__METHOD__ . ": EOF");
        return view('admin.jobs.in-progress', ['user'=> $user]);
    }

    public function queued () {
        Log::debug(__METHOD__ . ": BOF");
        $user = Auth::user();
        Log::debug(__METHOD__ . ": EOF");
        return view('admin.jobs.queued', ['user'=> $user]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function completed () {
        $user = Auth::user();
        return view('admin.jobs.completed', ['user'=> $user]);
    }

    public function cancelled () {
        $user = Auth::user();
        return view('admin.jobs.cancelled', ['user'=> $user]);
    }

    public function inProgress () {
        $user = Auth::user();
        return view('admin.jobs.in-progress', ['user'=> $user]);
    }

    public function queued () {
        $user = Auth::user();
        return view('admin.jobs.queued', ['user'=> $user]);
    }
}

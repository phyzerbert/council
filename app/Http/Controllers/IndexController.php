<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;

class IndexController extends Controller
{
    public function index(Request $request) {
        $data = Zone::all();
        return view('index', compact('data'));
    }
    
    public function greenway(Request $request) {
        return view('greenway.index');
    }

    public function dashboard(Request $request) {
        config(['site.page' => 'dashboard']);
        return view('backend.dashboard');
    }
}

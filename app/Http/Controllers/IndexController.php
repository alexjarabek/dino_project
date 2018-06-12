<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $team = DB::table('dream-team')->get();

        return view('index')->with('team', $team);
    }
}

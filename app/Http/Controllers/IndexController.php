<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $team = DB::table('base-stats')->where('dream-team-status', 'TRUE')->get();
        $current_stats= array();

        foreach ($team as $dino){
            $stats = DB::table($dino->lvl_stats)->where('Level', $dino->current_level)->get();
            array_push($current_stats, $stats);
        }
              
        return view('index', ['team' => $team , 'current-stats' => $current_stats]);
    }
}

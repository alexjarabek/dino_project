<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $team = DB::table('dinos')->where('dream_team_status', 'TRUE')->get();
        $health_a= array();
        $damage_a= array();

        foreach($team as $dino){
            $idx = 1;

            $damage = $dino->damage;
            $health = $dino->health;
            while($idx<$dino->current_level){
                $health = $health * 1.05;
                $damage = $damage * 1.05;
                $idx ++;
            };
            $idx = 0;
            array_push($health_a, round($health));
            array_push($damage_a, round($damage));
        }

        return view('index', [
            'team' => $team,
            'health' => $health_a,
            'damage' => $damage_a
            ]);
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Dino;

class DinoController extends Controller
{
    
    public function index()
    {
        $data = DB::table('dinos')->get();

        return view('dino/index', ['data' => $data]);
    }

    
    public function create()
    {
        return view('dino/create');
    }

    
    public function store(Request $request)
    {
        //validating the data
        $this->validate($request, array(
            'id' => 'required',
            'name' => 'required',
            'health' => 'required',
            'armor' => 'required',
            'damage' => 'required',
            'speed' => 'required',
            'critical' => 'required',
            'rarity' => 'required',
        ));

        $dino = new Dino;

        //Inserting the general stats of the dino
        $dino->id = $request->id;
        $dino->name = $request->name;
        $dino->health = $request->health;
        $dino->armor = $request->armor;
        $dino->damage = $request->damage;
        $dino->speed = $request->speed;
        $dino->critical = $request->critical;
        $dino->rarity = $request->rarity;

        //populating the image url field
        $url = 'img/dino/'. strtolower($dino->name) .'.png'; 
        $dino->image = $url;

        //populating lvl_stats table refrence
        $stats = strtolower($dino->name).'_lvl';
        $dino->lvl_stats = $stats;

        //populating dream team status and current level
        $dino->dream_team_status = False;
        $dino->current_level = 0;

        $file = $request->image;
        $name = strtolower($dino->name). '.'. $file->getClientOriginalExtension();
        $file->move(public_path("img/dino"), $name);

        $dino->save();
        
        return redirect()->route('dino.show', $request->id);
    }

    
    public function show($id)
    {
        $dino = DB::table('dinos')->where('id', $id)->first();

        $base_health = $dino->health;
        $base_damage = $dino->damage;
        
        $stats = array ();
        
        $damage = $dino->damage;
        $health= $dino->health;

        $idx = 2;
        while($idx<31){
            $n_damage = $damage * 1.05;
            $n_health = $health * 1.05;

            $damage = round($n_damage);
            $health = round($n_health);
            $temp_array = array();

            array_push($temp_array, $idx, $health, $damage);
            array_push($stats, $temp_array);
            $idx = $idx + 1;
        }

        return view('dino/show', [
            'dino' => $dino, 
            'stats' => $stats,
            'health' => $base_health,
            'damage' => $base_damage,
            ]);
    }


        public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}

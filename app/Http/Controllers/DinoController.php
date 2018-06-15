<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Dino;

class DinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('dinos')->get();

        return view('dino/index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dino/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $dino->save();
        
        return redirect()->route('dino.show', $request->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dino = DB::table('dinos')->where('id', $id)->first();
       
        $stats = DB::table($dino->lvl_stats)->get();

        return view('dino/show', ['dino' => $dino, 'stats' => $stats]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

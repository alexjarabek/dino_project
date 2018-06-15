@extends('layouts.master')

@section('content')
    <h1>The Current Dream Team</h1>
            @for ($i = 0; $i < 3; $i++)
                <div class="card" style="width:18rem; float:left;">
                    <img class="card-img-top" src="{{$team[$i]->image}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/dino/{{$team[$i]->id}}">{{$team[$i]->name}}</a></h5>
                        <p>Current Level: {{$team[$i]->current_level}}</p>
                        <ul>
                            <li>Health: {{$health[$i]}}</li>
                            <li>Armor: {{$team[$i]->armor}}%</li>
                            <li>Damage: {{$damage[$i]}}</li>
                            <li>Speed: {{$team[$i]->speed}}</li>
                            <li>Critical: {{$team[$i]->critical}}%</li>
                        </ul>
                    </div>
                </div>
            @endfor
        
@endsection
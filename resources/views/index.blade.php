@extends('layouts.master')

@section('content')

    <div id="banner">
        <img src="/img/banner.png" alt="">
    </div>

    <h1>The Current Dream Team</h1>
    <div class="container">
            @for ($i = 0; $i < 8; $i++)
            <div class="card" style="width:25%; float:left;">
                @if( file_exists("img/dino/" . strtolower(str_replace(' ', '', $team[$i]->name)) . ".png"))
                    <img class="card-img-top" src="/img/dino/{{strtolower(str_replace(' ', '', $team[$i]->name))}}.png" alt="">
                @else
                    <img class="card-img-top" src="/img/dino/none.png" alt="">
                @endif
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
    </div>
            
        
@endsection
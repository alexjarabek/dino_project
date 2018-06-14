@extends('layouts.master')

@section('content')
    <h1>The Current Dream Team</h1>
        @foreach($team as $dino)
            <div class="card" style="width:18rem; float:left;">
                <img class="card-img-top" src="{{$dino->image}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$dino->name}}</h5>
                    <p>Current Level: {{$dino->current_level}}/30</p>
                    <ul>
                        <li>Health: {{$dino->health}}</li>
                        <li>Armor: {{$dino->armor}}%</li>
                        <li>Damage: {{$dino->damage}}</li>
                        <li>Speed: {{$dino->speed}}</li>
                        <li>Critical: {{$dino->critical}}%</li>
                    </ul>
                </div>
            </div>
        @endforeach
@endsection
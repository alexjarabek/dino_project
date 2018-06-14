@extends('layouts.master')

@section('content')
    <h1>{{$dino->name}}</h1>
    <p>Health: {{$dino->health}}</p>
    <p>Armor: {{$dino->armor}}%</p>
    <p>Damage: {{$dino->damage}}</p>
    <p>Speed: {{$dino->speed}}</p>
    <p>Critical: {{$dino->critical}}%</p>
    <p>Rarity: {{$dino->rarity}}</p>

    <img src="/{{$dino->image}}" alt="" style="width:400px; height:400px;">

    <table class="table">
        <thead>
            <th>Level</th>
            <th>Health</th>
            <th>Damage</th>
        </thead>

        @foreach($stats as $stat)
            <tbody>
                <td>{{$stat->Level}}</td>
                <td>{{$stat->health}}</td>
                <td>{{$stat->damage}}</td>
            </tbody>
        @endforeach
    </table>
@endsection
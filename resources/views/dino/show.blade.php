@extends('layouts.master')

@section('content')
    <h1>{{$dino->name}}</h1>
    <p>Health: {{$dino->health}}</p>
    <p>Armor: {{$dino->armor}}%</p>
    <p>Damage: {{$dino->damage}}</p>
    <p>Speed: {{$dino->speed}}</p>
    <p>Critical: {{$dino->critical}}%</p>
    <p>Rarity: {{$dino->rarity}}</p>
    
    @if( file_exists("img/dino/" . strtolower(str_replace(' ', '', $dino->name)) . ".png"))
        <img style="width:150px; height:175px;" src="/img/dino/{{strtolower(str_replace(' ', '', $dino->name))}}.png" alt="">
    @else
        <img style="width:150px; height:175px;" src="/img/dino/none.png" alt="">
    @endif
    <br><br>
   

    <table class="table">
        <thead>
            <th>Level</th>
            <th>Health</th>
            <th>Damage</th>
        </thead>
        <td>1</td>
        <td>{{$health}}</td>
        <td>{{$damage}}</td>

        @foreach($stats as $stat)
        <tbody>
            <td>{{$stat[0]}}</td>
            <td>{{$stat[1]}}</td>
            <td>{{$stat[2]}}</td>
        </tbody>
        @endforeach
    </table>
@endsection
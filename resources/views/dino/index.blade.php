@extends('layouts.master')

@section('content')
    <h1>Dino List</h1>

    <table class="table">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Health</th>
            <th scope="col">Armor</th>
            <th scope="col">Damage</th>
            <th scope="col">Speed</th>
            <th scope="col">Critical</th>
            <th scope="col">Rarity</th>
        </thead>
        
            @foreach($data as $dino)
                <tbody>
                    <td>{{$dino->id}}</td>
                    <td><a href="/dino/{{$dino->id}}">{{$dino->name}}</a></td>
                    <td>{{$dino->health}}</td>
                    <td>{{$dino->armor}}</td>
                    <td>{{$dino->damage}}</td>
                    <td>{{$dino->speed}}</td>
                    <td>{{$dino->critical}}</td>
                    <td>{{$dino->rarity}}</td>
                </tbody>
            @endforeach
        
    </table>

    
@endsection
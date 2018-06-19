@extends('layouts.master')

@section('content')
    <h1>Dino List</h1>
    @if($amount > 8)
        <p style="float:right; color:red;">You currently have {{$amount}} Dinos in the dream team</p>
    @elseif($amount == 8)
        <p style="float:right;">Your dream team is looking good</p>
    @endif

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
            <th scope="col">Dream Team Status</th>
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
                    
                    {{Form::open(array('route' => array('dino.update', $dino->id), 'method' => 'PATCH'))}}
                    @if($dino->dream_team_status == 0)
                        <td>
                            {{Form::select('dream_team_status', array(0 => 'Out', 1 => 'In'), 0)}}
                            {{Form::submit('Submit')}}
                        </td> 
                    @else
                        <td>
                            {{Form::select('dream_team_status', array(0 => 'Out', 1 => 'In'), 1)}}
                            {{Form::submit('Submit')}}
                        </td> 
                    @endif
                    {{Form::close()}}
                </tbody>
            @endforeach
        
    </table>

    
@endsection
@extends('layouts.master')

@section('content')
    <h1>{{$dino->name}}</h1>
    <img src="/img/dino/{{strtolower($dino->name)}}.png" alt="" style="width:140px; height:175px;">
    
    <?php
        echo Form::open(array('url' => 'dino/{{$dino->id}}', 'method' => 'PATCH'));

            echo Form::label('dream_team_status', 'Dream Team Status');
            echo Form::select('dream_team_status', array(0 => 'No', 1 => 'Yes'), $dino->dream_team_status);
            echo Form::submit('submit');
        echo Form::close();
    ?>
@endsection
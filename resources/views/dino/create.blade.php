@extends('layouts/master')

@section('content')
    <h1>Add new Dino</h1>

    {!! Form::open(array('route'=>'dino.store')) !!}
        
        <!--Form input for id-->
        {{Form::label('id', 'Number: ')}}
        {{Form::text('id', null, array('class' => 'form-control'))}}

        <!--Form input for name-->
        {{Form::label('name', 'Name: ')}}
        {{Form::text('name', null, array('class' => 'form-control'))}}

        <!--Form input for health-->
        {{Form::label('health', 'Health: ')}}
        {{Form::text('health', null, array('class' => 'form-control'))}}

        <!--Form input for armor-->
        {{Form::label('armor', 'Armor: ')}}
        {{Form::text('armor', null, array('class' => 'form-control'))}}

        <!--Form input for damage-->
        {{Form::label('damage', 'Damage: ')}}
        {{Form::text('damage', null, array('class' => 'form-control'))}}

        <!--Form input for speed-->
        {{Form::label('speed', 'Speed: ')}}
        {{Form::text('speed', null, array('class' => 'form-control'))}}

        <!--Form input for critical-->
        {{Form::label('critical', 'Critical: ')}}
        {{Form::text('critical', null, array('class' => 'form-control'))}}
        
        <!--Form input for rarity-->
        {{Form::label('rarity', 'Rarity: ')}}
        {{Form::text('rarity', null, array('class' => 'form-control'))}}

        {{Form::submit('Submit', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:10px'))}}

    {!! Form::close() !!}

@endsection
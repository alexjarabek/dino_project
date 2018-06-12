@extends('layouts.master')

@section('content')
    <h1>The Current Dream Team</h1>
    <ul>
        @foreach($team as $dino)
            <li>{{$dino->id}}</li>
        @endforeach
    </ul>
@endsection
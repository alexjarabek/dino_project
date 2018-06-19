@extends('layouts.master')

@section('content')
    <h1>{{$dino->name}}</h1>
    <img src="/img/dino/{{strtolower($dino->name)}}.png" alt="" style="width:140px; height:175px;">
@endsection
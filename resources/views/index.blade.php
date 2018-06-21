@extends('layouts.master')

@section('content')

    <div id="index-grid">
        <div class="dino-title">
            Current Dream Team
        </div>
        
        @for ($i = 0; $i < 8; $i++)
            <div class="dino-tile" >
                <div class="dino-grid">
                    
                    @if( file_exists("img/dino/" . strtolower(str_replace(' ', '', $team[$i]->name)) . ".png"))
                        <img src="/img/dino/{{strtolower(str_replace(' ', '', $team[$i]->name))}}.png" alt="">
                    @else
                        <img src="/img/dino/none.png" alt="">
                    @endif

                    <div class="title">
                            <strong>{{$team[$i]->name}}</strong>
                    </div>

                    <div class="stats">
                        <ul>
                            <li>Health: {{$health[$i]}}</li>
                            <li>Armor: {{$team[$i]->armor}}%</li>
                             <li>Damage: {{$damage[$i]}}</li>
                            <li>Speed: {{$team[$i]->speed}}</li>
                            <li>Critical: {{$team[$i]->critical}}%</li>
                        </ul>
                    </div>

                    <div class="current-level">
                        <div class="title">Current Level</div>
                        <div class="value">{{$team[$i]->current_level}}</div>
                    </div>
    
                </div>
                
            </div>
        @endfor

        <div class="blog-title">
                Recent Blog Posts
        </div>
        <div class="blog-tile-1">
                <h1>Dummy Title</h1>
                <p>Dummy Text</p>
                
        </div>
        <div class="blog-tile-2">
                hello
        </div>
        <div class="blog-tile-3">
                hello
        </div>

        <div class="contact-card-1">
            Contact card one
        </div>

        <div class="contact-card-2">
            contact card two
        </div>
    </div>
        
@endsection
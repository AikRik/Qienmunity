@extends('layouts.app')

@section('content')
        <h1>Community</h1><br>


        @if(count($nieuws) >= 1)
            @foreach($nieuws as $post)
                <div class='well'>
                    <h3><a href="/communitypost/{{$post->id}}">{{$post->title}}</a></h3>
                </div>
            @endforeach
        @else
            <p> No Nieuws Posts Yet</p>
        @endif
        
@endsection
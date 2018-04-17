@extends('layouts.app')

@section('content')

        <h1>Nieuws</h1>
            <div class='well'>
            @if (auth()->user()->rol == 0)
                <a href="/nieuwsposts/create" class="btn btn-default">Nieuw bericht ></a>
            @endif
            
            <input id="zoek" type="text" name='search' onkeyup="zoeken()" data-token="{{ csrf_token() }}" data-link="{{ url('/zoek') }}" class="form-control" placeholder="zoek">
            
                </div>
            <br/>
        @if(count($nieuws) >= 1)
            @foreach($nieuws as $post)
                <div class='well'>
                    <h3><a href="/nieuwsposts/{{$post->id}}">{{$post->title}}</a></h3>
                    <div><h4>{{str_limit($post->content, 50)}}</h4></div><br>
                    <div><h5>Gepost op: {{$post->created_at}}</h5></div>
                </div>              
            
            @endforeach
            {{$nieuws->links()}}
        @else
            <p> No Nieuws Posts Yet</p>
        @endif
            
@endsection
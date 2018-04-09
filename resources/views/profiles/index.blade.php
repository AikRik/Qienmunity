@extends('layouts.app')

@section('content')
        <h1>Profielen</h1>
            
        @if(count($profiles)>0)
            @foreach($profiles as $profile)
            <div class ='well'>
                <a href ="/profiles/{{$profile->id}}"><img src="{{$profile->image}}" width="50px" height="50px"></a>
                <b><a href ="/profiles/{{$profile->id}}"> {{$profile->username}}</a></b>
                <small>Laatst geüpdate op {{$profile->updated_at}}</small>
            </div>
            @endforeach
            {{$profiles->links()}}
        @else
            <p>Geen profielen gevonden</p>
        @endif
@endsection
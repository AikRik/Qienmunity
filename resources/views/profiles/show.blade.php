@extends('layouts.app')

@section('content')
        <a href="/profiles" class="btn btn-default">< Terug </a>
        <h1> {{$profile->username}} </h1>
        <ul>
            <li><img src ='{{$profile->image}}' width ="250px" height="250px"></li>
            <li><b>Jarig op: </b>{{$profile->dateofbirth}}</li>
            <li><b>Werkstatus: </b>{{$profile->position}}</li>
            <li><b>Bio: </b>{{$profile->biography}}</li>
            <li><b>E-mail: </b>{{$profile->email}}</li>
            <hr/>
            <small>Laatst geüpdate op: {{$profile->updated_at}}</small>
        </ul>
@endsection
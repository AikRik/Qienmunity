@extends('layouts.app')

@section('content')
        <h1>Create Post</h1><br>

        <a href="http://localhost:8000/">Home</a><br>
        <a href="http://localhost:8000/profiel">Profiel</a><br>
        <a href="http://localhost:8000/dashboard">Dashboard</a><br>
        <a href="http://localhost:8000/community">Community</a><br>
        <a href="http://localhost:8000/contact">Contact</a><br>
        <a href="http://localhost:8000/resources">Resources</a><br>
        
        {!! Form::open(['action' => 'NieuwsController@store', 'method' => 'POST']) !!}
            {{Form::Label('titel')}}
                {{Form::text('titel','',['class'=>'form-control', 'placeholder' => 'Titel'])}}
                <br>
                {{Form::textarea('content','',['class'=>'form-control', 'placeholder' => 'Content'])}}
                {{Form::submit('Submit')}}
        {!! Form::close() !!}

@endsection
    
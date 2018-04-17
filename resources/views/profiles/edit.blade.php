@extends('layouts.app')

@section('content')
@if (auth()->user()->id == $profile->user_id)


        <h1>Profiel bewerken</h1>
        <h2>{{$profile->username}}</h2>
        <a href="/myprofile" class="btn btn-default">< Ga terug</a><br/><br/>
        {!! Form::open(['action' => ['ProfileController@update', $profile->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
            <div class='form-group'>
                {{Form::label('email', 'E-mail')}}
                {{Form::text('email', $profile->email,['class'=>'form-control', 'placeholder'=>'example@qien.nl'])}}
            </div>
            <div class='form-group'>
                {{Form::label('dateofbirth', 'Geboortedatum')}}
                {{Form::date('dateofbirth', $profile->dateofbirth,['class'=>'form-control'])}}
            </div>
            <div class='form-group'>
                {{Form::label('position', 'Werkstatus')}}
                {{Form::text('position', $profile->position,['class'=>'form-control', 'placeholder'=>'Bijv: Trainee bij Qien'])}}
            </div>
            <div class='form-group'>
                {{Form::label('biography', 'Biografie')}}
                {{Form::textarea('biography', $profile->biography,['class'=>'form-control', 'placeholder'=>'Over mij...', 'rows'=>5])}}
            </div>
            <div class='form-group'>
                {{Form::label('image', 'Profielfoto')}}
                {{Form::file('image',['class'=>'form-control'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Wijzig profiel >', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
            
@else
    
<h1>Leuk geprobeerd, dit is niet jouw profiel</h1>
<a href="/myprofile" class="btn btn-default">< Terug naar mijn profiel</a>

@endif

@endsection
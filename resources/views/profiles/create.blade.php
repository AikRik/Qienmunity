@extends('layouts.app')

@section('content')
        <h1>Nieuw profiel aanmaken</h1>
        {!! Form::open(['action' => 'ProfileController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'files' => true])!!}
            <div class='form-group'>
                {{Form::label('username', 'Username (voor- en achternaam)')}}
                {{Form::text('username', '',['class'=>'form-control', 'placeholder'=>'Username (voor- en achternaam)'])}}
            </div>
            <div class='form-group'>
                {{Form::label('email', 'E-mail')}}
                {{Form::text('email', '',['class'=>'form-control', 'placeholder'=>'example@qien.nl'])}}
            </div>
            <div class='form-group'>
                {{Form::label('dateofbirth', 'Geboortedatum')}}
                {{Form::date('dateofbirth', '',['class'=>'form-control'])}}
            </div>
            <div class='form-group'>
                {{Form::label('position', 'Werkstatus')}}
                {{Form::text('position', '',['class'=>'form-control', 'placeholder'=>'Bijv: Trainee bij Qien'])}}
            </div>
            <div class='form-group'>
                {{Form::label('biography', 'Biografie')}}
                {{Form::textarea('biography', '',['class'=>'form-control', 'placeholder'=>'Over mij...', 'rows'=>5])}}
            </div>
            <div class='form-group'>
                {{Form::label('image', 'Profielfoto')}}
                {{Form::text('image', '',['class'=>'form-control', 'placeholder'=>'Tijdelijk: url van afbeelding'])}}
            </div>
            {{Form::submit('Maak profiel aan >', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
            
@endsection
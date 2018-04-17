@extends('layouts.app')
@section('content')
        <a href="/profiles" class="btn btn-default">< Terug naar alle profielen</a>
        <h1> {{$profile->username}} </h1>
        <ul>
            <li>@if (Storage::disk('local')->has($profile->username . '-' . $profile->user_id . '.jpg'))
                <section class="row new-post">
                        <img width=250px src="{{ route('profile.image', ['filename' => $profile->username . '-' . $profile->user_id . '.jpg']) }}" alt="" class="img-responsive">
                    </section>
                @endif</li>
            <li><b>Geboortedatum: </b>{{$profile->dateofbirth}}</li>
            <li><b>Werkstatus: </b>{{$profile->position}}</li>
            <li><b>Bio: </b>{{$profile->biography}}</li>
            <li><b>E-mail: </b>{{$profile->email}}</li>
        </ul>
        <hr/>
        <small>Laatst geüpdate op: {{$profile->updated_at}}</small>
@endsection
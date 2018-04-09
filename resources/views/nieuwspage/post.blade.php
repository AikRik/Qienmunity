@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <tr>
            <th>Titel:</th>
            <th>Naam:</th>
            <th>Gepost op:</th>
        </tr>
        @foreach($users as $post)
            <tr>    
                <th>{{$post->title}}</th>
                <th>{{$post->user->name}}</th>
                <th>{{$post->created_at}}</th>                
            </tr>
        @endforeach

    </table>
@endsection
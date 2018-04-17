@extends('layouts.app')

@section('content')
        

<a href="/nieuwsposts" class="btn btn-default">< Ga terug</a><br/><br/>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="showNewsPost" style=background-color:gray>
                    <h1>{{$post->title}}</h1><br>
                    <p>{{$post->content}}</p>
                    <small>Geschreven op {{$post->created_at}} door {{$post->user->name}}</small>
                    <hr>
                </div>
            </div>
	</div>
        <div class="row">
		<div class="col-md-8 col-md-offset-2">
			@foreach($post->comments as $comment)
				<div class="comment">
					<p>{{$comment->content}}</p>
                                        <small>Geschreven door {{$comment->user->name}}</small>
                                        <hr>
				</div>
			@endforeach
		</div>
	</div>
        <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
                {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

                        <div class="row">
                                <div class="col-md-12">
                                        {{ Form::label('comments', "Comment:") }}
                                        {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

                                        {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                                </div>
                        </div>

                {{ Form::close() }}
        </div>
      
        
        
@endsection
@extends('frontend.layouts.app')
@if($logged_in_user)
@section('content')
    <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>

        @foreach($thread->messages as $message)
            <div class="media">
                <a class="pull-left" href="#">
                    <img src="//www.gravatar.com/avatar/{{ md5($message->user->email) }} ?s=64" alt="{{ $message->user->name }}" class="img-circle">
                </a>
                <div class="media-body">
                    <h5 class="media-heading">{{ $message->user->name }}</h5>
                    <p>{{ $message->body }}</p>
                    <div class="text-muted"><small>Posted {{ $message->created_at->diffForHumans() }}</small></div>
                </div>
            </div>
        @endforeach

        @if(count($file_link) >0)
        @foreach($file_link as $link)
        <a href="<?php echo asset("storage/$link->file");?>"><i class="fa fa-link"></i> attached file</a>
        @endforeach
        @endif

        <h3>Add a new message</h3>
        {!! Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']) !!}
        <!-- Message Form Input -->
        <div class="form-group">
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
        </div>

        @if(count($users) > 0)
        <div class="checkbox">
            @foreach($users as $user)
                <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->name }}</label>
            @endforeach
        </div>
        @endif

        <!-- Submit Form Input -->
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
@endif
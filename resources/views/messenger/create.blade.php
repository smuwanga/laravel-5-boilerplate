
@extends('frontend.layouts.app')
@if($logged_in_user)
@section('content')
<h1>Create a new message</h1>

{!! Form::open(
    array(
        'route' => 'messages.store', 
        'class' => 'form', 
        'files' => true)) !!}

<div class="col-md-6">
    <!-- Subject Form Input -->
    <div class="form-group">
        {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}
        {!! Form::text('subject', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Message Form Input -->
    <div class="form-group">
        {!! Form::label('message', 'Message', ['class' => 'control-label']) !!}
        {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">

    {!! Form::label('File Attachment') !!}
    {!! Form::file('file', null) !!}

    </div>

    @if(count($users) > 0)
    <div class="checkbox">
        @foreach($users as $user)
            <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]" value="{{ $user->supervised_by_id }}">{!!$user->name!!}</label>

        @endforeach
    </div>
    @endif
<!-- Submit Form Input -->
    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
    </div>
</div>
{!! Form::close() !!}
@stop
@endif
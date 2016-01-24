
@extends('layouts.auth')
@section('title','Forgot password')
@section('heading','Please enter your email to reset the password');

@section('content')
    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Send link',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection


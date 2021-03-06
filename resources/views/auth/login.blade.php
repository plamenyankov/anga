@extends('layouts.auth')
@section('title','Login')
@section('heading','Please sign in!')

@section('content')

    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Login',['class'=>'btn btn-primary']) !!}
    <a href="{{route('auth.password.email')}}" class="small">Forgot your password?</a>
    {!! Form::close() !!}
@endsection


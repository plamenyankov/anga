@extends('layouts.backend')
@section('title','Delete '.$offer->title)


@section('content')
    {!! Form::open(['method'=>'delete','route'=>['backend.offers.destroy',$offer->id]]) !!}
    <div class="alert alert-danger">
        <strong>Warning!</strong> You are about to delete an offer. This action cannot be undone. Are you sure you want to do this?
    </div>
    {!! Form::submit('Yes, delete this offer!',['class'=>'btn btn-danger']) !!}
    <a href="{{route('backend.offers.index')}}" class="btn btn-success"><strong>No, get me out of here!</strong></a>
    {!! Form::close() !!}
@endsection
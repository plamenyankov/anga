@extends('layouts.backend')
@section('title','Component')



@section('content')
    {!! Form::model($component,[
    'method'=>'put',
    'route'=>['backend.components.update',$component->id]
    ]) !!}
    {!! Form::hidden('id',null) !!}
    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
    <script>
        new SimpleMDE({
            element: document.getElementsByName('body')[0]
        }).render();


    </script>
@endsection
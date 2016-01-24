@extends('layouts.backend')
@section('title',$offer->exists?'Edit':'Create new offer')


@section('content')
    {!! Form::model($offer,[
    'method'=>$offer->exists?'put':'post',
    'route'=>$offer->exists?['backend.offers.update',$offer->id]:['backend.offers.store'],
    'files' => true
    ]) !!}
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Change</th>
            <th>Active</th>
        </tr>
        </thead>
        <tbody>
        <tr>


            <td><input type="checkbox" name="active" value="1" {{$offer->active?'checked':''}} ></td>
            <td>
                <span class="glyphicon {{$offer->active?'glyphicon-ok text-success':'glyphicon-remove text-danger'}}"></span>
            </td>
        </tr>
        </tbody>
    </table>

    @if($offer->filename && file_exists('offers/'.$offer->filename))
        <table class="table table-hover">
            <thead>
            <tr>
                <th>File name</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><a href="/offers/{{$offer->filename}}" download="{{$offer->filename}}"
                       style="font-size: 24px;">{{$offer->filename}}</a></td>

                <td><a href="{{route('backend.offers.file',$offer->id)}}">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a></td>
            </tr>
            </tbody>
        </table>
    @else

        <div class="form-group">
            {!! Form::label('filename','Upload file') !!}
            {!! Form::file('filename', null) !!}
        </div>
    @endif
    <div class="form-group">
        {!! Form::label('title') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Description') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>


    {!! Form::submit($offer->exists?'Save Offer':'Create new Offer',['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
    <script>
        new SimpleMDE({
            element: document.getElementsByName('body')[0]
        }).render();
        $('.CodeMirror, .CodeMirror-scroll').css({'min-height': '100px'});

    </script>
@endsection
@extends('layouts.backend')
@section('title','Offers')


@section('content')
    <a href="{{route('backend.offers.create')}}" class="btn btn-primary">Create new offer</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Filename</th>
            <th>Active</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @if($offers->count() == 0)
            <tr>
                <td colspan="5" style="text-align: center; font-size: 24px; font-weight: bold;">No offers!</td>
            </tr>
        @endif
        @foreach($offers as $offer)
            <tr class="{{$offer->active?'':'info'}} ">
                <td><a href="{{route('backend.offers.edit',$offer->id)}}">{{str_limit($offer->title,40)}}</a></td>
                <td>{{str_limit($offer->body,40)}}</td>
                <td>{{$offer->filename?:'None'}}</td>
                <td>
                    <span class="glyphicon {{$offer->active?'glyphicon-ok text-success':'glyphicon-remove text-danger'}}"></span>
                </td>
                <td><a href="{{route('backend.offers.edit',$offer->id)}}">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a></td>
                <td><a href="{{route('backend.offers.confirm',$offer->id)}}">
                        <span class="glyphicon glyphicon-remove"></span>
                    </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $offers->render() !!}
@endsection
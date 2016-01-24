@extends('layouts.backend')
@section('title','Dashboard')
@section('heading','Welcome, please login.')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                @foreach($offers as $offer)
                    <li class="list-group-item"><h4>{{$offer->title}}<a
                                    href="{{route('backend.offers.edit',$offer->id)}}" class="pull-right"><span
                                        class="glyphicon glyphicon-edit"></span></a></h4>
                    {!! $offer->body !!}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item"><h4 class="semibold">{{$user->name}}</h4>
                        <strong>Last login:</strong> {{ $user->last_login_diffrence }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="margin-top: 50px;">
<h4>Subscribers:</h4>
            </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subscribed At</th>
                    
                </tr>
                </thead>
                <tbody>
                @foreach($sub as $s)
                    <tr >
                        <td>{{$s->name}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->phone}}</td>
                        <td>{{$s->created_at}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            {!! $sub->render() !!}
        </div>
</div>
@endsection
<!doctype html>
<html lang="bg">
<head>
    <meta charset='UTF-8'>
    <title>@yield('title') &mdash; Anga Group</title>

    <link rel="stylesheet" href="{{theme("css/backend.css")}}"/>
    <script src="{{theme('js/all.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="nav-bar-header"><a href="/" class="navbar-brand">Angagroup</a></div>
        <ul class="nav navbar-nav">
            <li><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('backend.users.index')}}">Users</a></li>
{{--            <li><a href="{{route('backend.pages.index')}}">Pages</a></li>--}}
{{--            <li><a href="{{route('backend.blog.index')}}">Blog Posts</a></li>--}}
            <li><a href="{{route('backend.components.header')}}">Header</a></li>
            <li><a href="{{route('backend.components.about')}}">About</a></li>
            <li><a href="{{route('backend.offers.index')}}">Offers</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><span class="navbar-text">Hello, {{$admin->name}}</span></li>
            <li><a href="{{route('auth.logout')}}">Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>@yield('title')</h3>
            @if($errors->any())
                <div class="alert alert-danger">
                    <strong>There is an error!</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach

                    </ul>
                </div>
            @endif
            @if($status)
                <div class="alert alert-info">{{$status}}</div>
            @endif
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
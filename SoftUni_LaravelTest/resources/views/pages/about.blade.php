@extends('app1')
@section('css')
    <link rel="stylesheet" href=""/> <!-- za CSS -->
@stop
@section('content')

@if(count($name))
    <nav class="NavigationBar">
        <ul>
            <li><a href="/" class="btn btn-primary btn-n" style="margin-top: 25px;">Return</a></li>
            <li><a href="/auth/logout" class="btn btn-primary btn-lg" style="margin-top: 25px;">Logout</a></li>
        </ul>
    </nav>
    <main>
    <h1>For this blog we used:</h1>
    <ol type="1" id="abouth">
        @foreach($name as $n)
            <li>{{$n}}</li>
        @endforeach
    </ol>
@endif

    </main>
@stop

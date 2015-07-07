@extends('app1')

@section('content')
    <nav class="NavigationBar">
        <ul>
            <li><a href="/" class="btn btn-primary btn-n" style="margin-top: 25px;">Return</a></li>
            <li><a href="/auth/logout" class="btn btn-primary btn-lg" style="margin-top: 25px;">Logout</a></li>
        </ul>
    </nav>
    <main>My contatactDate is: </main>

@stop


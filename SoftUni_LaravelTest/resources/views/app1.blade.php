<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app1.css')}}">
</head>
<body>
    <header>
        <img id="HeaderLeftImage" src="../../images/logo.png"/>
        <img id="HeaderRightImage" src="../../images/logo.png"/>
        <div id="LogoText">
            <p>Welcome To Las Vegas</p>
        </div>
    </header>
    @if(Session::has('flash_message'))
        <h1>{{session('flash_message')}}</h1>
    @endif
    <main class="container">
        @yield('content')
    </main>
    <footer id="mainFooter">
        <a href="/about" class="footerButton" style="margin-top: 25px;">About</a>
        <a href="/contact" class="footerButton" style="margin-top: 25px;">Contact</a>
    </footer>

</body>
</html>
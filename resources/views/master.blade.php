<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fletcher</title>
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

     <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body style="background-color: #f5f8fa;">
     <header>
        <div id="line"></div>
        <div >
        <img id="logoImg" src="{{asset('img/download.jpg')}}">
        <h3>
            Nyameni High School
        </h3>
        </div>
        
    </header>

<nav id="mainNav">
    <a href="{{url('/')}}">
         Home 
    </a> |
    <a href="{{ route('login') }}">
        Log In
    </a>
   
</nav>

@yield('content')
<div class="footer " id="footerDiv">
    <div>
       <p> <strong> This is a text on the footer</strong></p>
    </div>
</div>

<script type="text/javascript" src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
</body>
</html>

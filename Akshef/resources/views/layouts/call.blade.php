<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="icon" href="img/logo.png" type="images/png" sizes="17x19">

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/ajax.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootsrap.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

<style>
  #services{ height: auto !important;
             background-image: url(img/hospi1.jpg);
             background-size: 1700px 


  }



#tables{   text-align: center;
           direction: rtl;
           color: #ebebeb;
           float: right;
           margin-right: 160px;
           font-weight: bold;
  

}

  #table1{ 
           direction: rtl;
           color: #ebebeb;
           text-align: center;
           font-weight: bold;



  }

#droptxt{ color: #febf01;
          margin-top: 50px;
          font-weight: bold;


}

  #div1 {
    padding: 5px;
    height: 400px;
    background: rgba(0, 138, 207, 0, 0.5);
    border: solid 2px #febf01;
    border-radius: 35px;
    text-align: center;
    font-weight: bold;
    
}
</style>
@include('style.navbarstyle')
@include('style.footer')
</head>
<body>
@include('inc.nav')
<header>
@yield('content')
</header>
<footer>
@include('inc.footer')
</footer>
</body>
</html>

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

body{padding:0;
     margin:0;

}

  #section1{ 
          width: width:100% !important;
          background-color: #ebebeb;

}

#section2{ 
          width: auto;
          background-color: #ebebeb;

}#section3{
          width: auto;
          background-color: #ebebeb;

}#section4{ 
          width: auto;
          background-color: #ebebeb;

}#section5{ 
          width: auto;
          background-color: #ebebeb;

}


.container-fluid{ width:100% !important;
                  padding:0;
				  margin:0;
				  font-family:Droid Sans Arabic;


}

.portfolio{
		padding:6%;
		text-align:center;
    width: auto !important;
    direction: rtl;
  	}
	.heading{
		background: #fff;
		padding: 1%;
		text-align: left;
		box-shadow: 0px 0px 4px 0px #545b62;
    direction: rtl;

	}
	.heading img{
		width: 10%;
    direction: rtl;

	}
	.bio-info{
		padding: 5%;
		background:#fff;
		box-shadow: 0px 0px 4px 0px #b0b3b7;
        direction: rtl;

	}
	.name{
		font-family: 'Charmonman', cursive;
		font-weight:600;
	}
	.bio-image{
		text-align:center;
	}
	.bio-image img{
		border-radius:50%;
	}
	.bio-content{
		text-align:right;
    direction: rtl;
	}
	.bio-content p{
		font-weight:600;
		font-size:30px;
    text-align:right;
    direction: rtl;
    
	}

#textcolor{ color: #16a3b5;


}

#textcolor1{ color: #febf01;


}


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

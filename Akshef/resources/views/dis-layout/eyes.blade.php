<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="img/logo.png" type="images/png" sizes="17x19">
<title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/ajax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootsrap.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
   @include('style.navbarstyle')
   @include('style.footer')
   @include('style.eyesm')
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


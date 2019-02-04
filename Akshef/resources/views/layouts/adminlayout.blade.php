<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Akshef</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
      
<style>
      .th{
        color:#070606b6;
        direction: ltr ! important ;
       font-size:18px;
  
      }
      .tb{
       color:#febf01;
       font-size:18px;

      }
    .name{
        color:#070606b6;
  
    }
    .email{
       color:cyan;
    }
.main{
    background-color:rgba(21, 163, 181, 0.6);
    margin-top:5px;
    border:none;
}
.dash{
    margin-top:10px;
    margin-bottom:5px;
    color:#fff;
    background-color:#febf01;
    text-align:center;

}
.dash-box{
    background-color:#febf01 !important;
    border:none;

}
.table table-striped th ,td {
color:#070606b6;
}
.btna{
padding:50px;
text-decoration:none !important ;
}
.btn a:hover{
    color:#febf01 !important;
}
#box1{
    margin-top:10px;
    background-color:rgba(21, 163, 181, 0.6);
}
</style>


</head>
<body>
@include('inc.admindashboard')
<section>
@include('inc.messages')
@yield('content')
</section>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>




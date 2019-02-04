
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="js/ajax.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootsrap.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
</head>
<body>
<a href="/article" class="btn btn-default">عودة الى صفحة المقالات</a>
    <h1>{{$art->title}}</h1>
    <br><br>
    <div>
        {{$art->body}}
    </div>

</body>
</html>
    
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>Posts</h1>
    @if(count($art) > 0)
        @foreach($art as $item)
            <div class="well">
                <div class="row">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3 style="color:black;"><a href="article/{{$item->id}}">{{$item->title}}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach
        {{$art->links()}}
    @else
        <p>ليس هناك مقالات لعرضها</p>
    @endif

</body>
</html>
    
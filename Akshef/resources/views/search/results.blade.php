@extends('layouts.landingpage')
@section('title')
Search
@endsection
@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>

</div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img2" src="img/1.jpg" alt="صحتــك أولويتــك بالحيــــاة" width="1200" height="700">
        <div class="carousel-caption">
          <p class="text1">صحتــك أولويتــك بالحيــــاة</p>
          <p class="text2">طبيب معك اينما كنت وفي اي وقت</p>
          <a href="estshrtabibk.html"><button class="btn btn-info"><p class="text3">تحدث الان</p></button></a>

        </div>      
      </div>
       <form>

<div class="container">
@if(count($doc)>0)
<h3> <a href="doctors">الأطبــــــاء </a></h3> 
<table class="table table-striped">
<thead>
<tr>
<th>Name</th>
<th>specialty</th>
<th>email</th>
<th>phoneNumber</th>
<th>Address</th>
</tr>
</thead>
<tbody>
@foreach($doc as $user)
<tr>
<td><a href="#">{{$user->name}}</a></td>
<td>{{$user->specialty}}</td>
<td>{{$user->email}}</td>
<td>{{$user->telephone}}</td>
<td>{{$user->Address}}</td>


</tr>
@endforeach
</tbody>
</table>
@endif
</div>
@if(count($art)>0)
<h3><a  href="healthinformation" style="direction:rtl;  text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">معلومــات صحيــــــه</a></h3>
@foreach($art  as $art)
<div class="form-group"clas="col-sm-12">
<h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12"><a href="{{$art->link}}">{{$art->name}}</a></h1>
<p style="direction:rtl; color:#989898; font-family:Droid Sans Arabic" class="col-sm-12"  class="pull-right">{{$art->content}}</p>
<small>Written on {{$art->created_at}} </small>
</div>
<hr style="color:febf01 ; width:3px ;">
@endforeach
@endif
@if(count($dis)>0)
<h3><a  href="disease" style="direction:rtl;  text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">الأمــــــراض</a></h3>
 
@foreach($dis as $dis)
<div class="form-group"clas="col-sm-12">
<h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12"><a href="{{$dis->link}}">{{$dis->name}}</a></h1>
<p style="direction:rtl; color:#989898; font-family:Droid Sans Arabic" class="col-sm-12"  class="pull-right">{{$dis->content}}</p>
<small>Written on {{$dis->created_at}}  </small>
</div>
<hr>
@endforeach
@endif
@endsection
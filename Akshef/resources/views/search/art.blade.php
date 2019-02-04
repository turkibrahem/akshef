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
@if(isset($details))
<p> The Search results <b> {{ $query }} </b> are :</p>
<table class="table table-striped">
<thead>
<tr>
<th>title</th>
<th>body</th>
</tr>
</thead>
<tbody>
@foreach($details as $user)
<tr>
<td><a href="#">{{$user->name}}</a></td>
<td>{{$user->specialty}}</td>
</tr>
@endforeach
</tbody>
</table>
@else
<h1>There is nothing to show</h1>
@endif
</div>
@endsection
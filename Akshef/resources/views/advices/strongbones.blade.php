@extends('advicelayout.ad')
@section('title')
Strong|Bones|
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
        <img class="img2" src="img/bonesmain.jpg" alt="صحتــك أولويتــك بالحيــــاة" width="1200" height="700">
        <div class="carousel-caption">
          <p class="text1">صحتــك أولويتــك بالحيــــاة</p>
          <p class="text2">إكشـف معك اينما كنت وفي اي وقت</p>
          <button class="btn btn-info"><p class="text3">تحدث الان</p></button>

        </div>      
      </div>
      @if(count($art)>0)
      @foreach($art as $art)
<div class="form-group"clas="col-sm-12">
      <h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">{{$art->name}}</h1>
      <p style="direction:rtl; color:#989898; font-family:Droid Sans Arabic ;line-height:2; font-size:18px; text-align:justify ;text-justify: inter-word;" class="col-sm-12"  class="pull-right">{{$art->content}}</p>
</div>
      @endforeach
      @else
      <p>لايوجد نتائج للعرض</p>
      @endif
@endsection
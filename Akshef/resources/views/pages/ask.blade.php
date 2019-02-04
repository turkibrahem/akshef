@extends('layouts.ask')

@section('title')
Consultation
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
        <img class="img2" src="img/estshr.jpg" alt="صحتــك أولويتــك بالحيــــاة" width="1200" +>
        <div class="carousel-caption">
          <p class="text1">صحتــك أولويتــك بالحيــــاة</p>
          <p class="text2">إكشـــــف معك اينما كنت وفي اي وقت</p>
          <a href="ask"><button class="btn btn-info"><p class="text3">تحدث الان</p></button></a>

        </div>      
      </div>
       <form>


    


<!---------------------------------------------------------------------Estshr Tabibk Section------------------------------------------------------------------------------->

<br><br>
@if(!Auth::guest())
<div class="line1"> </div>
<h4 id="headline">احصل علي اجابة لسؤالك الآن عبر محادثة نصية</h4>
<div class="line1"> </div>


<h6 id="headline1">80 طبيب متاحون ومستعدون للاجابة علي سؤالك</h6>
<br><br>
<div class="row slideanim">
<div class="col-sm-3"></div>
<div class="row slideanim">

</div>


<br>
<a href="/Akshef/public/home/create"class="btn btn-info"id="followbtn">لعمل استشارةاضغط هنا</a>

</div>
<br>
<div class="col-sm-12" style="direction:ltr;">
<h6 id="pro1"> سؤالك ومعلوماتك ستبقى سرية<img src="img/2.png" width="55" height="50"></h6>
<h6 id="pro2"> الوقت المتوقع للإجابة 8-12 ساعة <img src="img/3.png" width="50" height="50"></h6>
<h6 id="pro3"> أطباؤنا قادرون على المساعدة في حل معظم الحالات الطبية <img src="img/4.png" width="50" height="50"></h6>
<h6 id="pro4"> اطباؤنا متواجدون على مدار الساعة لإعطائك النصائح الصحية<img src="img/1.png" width="55" height="50"></h6>  
</div>
</div>
</div>
<br><br><br>

@else
<section style="margin-bottom:150px; text-align:center;" > 
<div class="col-md-12">
<h2 class="col-md-12">   انت غير مسجل لعمل استشارة  رجاء تسجبل الدخول او الاشتراك  </h2>
<a href="login" class="btn btn-warning" class="col-md-3" class="text-center">تسجبل الدخول</a>
<a href="register" class="btn btn-warning" class="col-md-3" class="text-left">التسجيل</a>
</section>
@endif

@endsection
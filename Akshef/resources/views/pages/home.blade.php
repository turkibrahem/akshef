@extends('layouts.landingpage')
@section('title')
Home|Page|
@endsection
@section('content')
<!---------------------------------------------------------------------image background------------------------------------------------------------------------------->






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
          <p class="text2">إكشـــــف معك اينما كنت وفي اي وقت</p>
          <a href="ask"><button class="btn btn-info"><p class="text3">تحدث الان</p></button></a>

        </div>      
      </div>
       <form>






<div id="about" class="container-fluid">
    <div class="row col-sm-12">
          <div class="col-sm-5">
            <br><br><br><br><span id="img1"><img src="img/doc.png" width="450" height="350"></span>
                </div>
      <div class="col-sm-7">
        <br><h2 id="sz">عــن الموقــــع</h2><br>
        <h3>من اهم اهداف اكشف هو رفع المستوى الصحى عن طريق تثقيف الجمهور والاطباء</h3><br>
        <p id="pabout">على السواء لاطباء عن طريق تسهيل الوصول الى الابحاث العلمية عن طريق الوصلات.</p>
        <p id="pabout"> المختلفة للمواقع العلمية ومحركات البحث والمكتبات العالمية بالإضافة الى المقالات</p>
        <p id="pabout">للفت النظر الى الموضوعات الهامة والمتغيرة فى الطب<span>.</span></p>
                  <p id="pabout">اما بالنسبة للجمهور فالموقع يعيد مفهوم الثقافة العامة و العلمية والصحية للجمهور</p>
                  <p id="pabout">كما يلفت النظر الى الاخطار الصحية فى اى مكان فى العالم لكون العالم اصبح قرية صغيرة </p>
                  <p id="pabout"> ويكمن انتقال الامراض فيها بسهولة وقراء طبيبك موجودون فى كل اماكن العالم</p>
                  <p id="pabout">تقريبا بالاضافة الى السفر الدائم بين البلدان<span>.</span></p>
  
        <br><a href="about"class="btn btn-default btn-lg" id="yellowabout">لقراءة المزيد</a>   <br><br>

      </div>
    </div>
  </div>

  




 <!---------------------------------------------------------------------Services Section------------------------------------------------------------------------------->



  




 <!---------------------------------------------------------------------Services Section------------------------------------------------------------------------------->

<div id="services1" class="container-fluid text-center">
    <br><br>
    <h2>خدماتنــا</h2> <br>
    <br>
    <div class="row slideanim" id="row1">
      <div class="col-sm-4">
            <img src="img/list.png" id="i0">
            <a href="doctors"><h4 id="icon1txt">بيانــات الأطبـــاء</h4></a>
            </div>

      <div class="col-sm-1"> </div> 
      
      <div class="col-sm-2">
            <img src="img/bodyhov.png" id="i1">
            <a href="ask"><h4 id="icon1txt">استشارات طبية أونلاين</h4></a>
            </div>
      
            <div class="col-sm-2"> </div> 

      <div class="col-sm-2">
            <img src="img/true.png" id="i2">
            <a href="doctors"><h4 id="icon1txt">خدمة الحجز أونلاين</h4></a>
        </div>


    </div>
    <br><br><br><br>


    <div class="row slideanim" id="row1">
            <div class="col-sm-4">
                <img src="img/treat.png" id="i3">
                <a href="workout"><h4 id="icon1txt">الرياضة اليومية</h4></a>
                </div>
      
            <div class="col-sm-1"> </div> 
            
            <div class="col-sm-2">
                    <img src="img/bt.png" id="i4">
                    <a href="diseas"><h4 id="icon1txt">نصائح للوقاية من الأمراض</h4></a>
                  </div>
            
                  <div class="col-sm-2"> </div> 
      
      
            <div class="col-sm-2">
                    <img src="img/heart.png"id="i5">
                    <a href="info"><h4 id="icon1txt">معلومات صحية</h4></a>
              </div>
      
        



    </div>

    <br><br><br><br>

      <div id="services" class="container-fluid text-center">
        <br><br>
    <h2>فريــق الموقــع</h2>
    <br>
    <br>
    <div class="row slideanim">
    <div class="col-sm-1"></div>
      <div class="col-sm-2">
      <span><img src="img/randa.png" width="140" height="135"></span>
            <h4  id="teamname">راندا جبري</h4>
        <p></p>
      </div>
      <div class="col-sm-2">
     <span><img src="img/mody.png" width="140" height="135"></span>
        <h4  id="teamname">محمد عليّ الدين</h4>
        <p></p>
      </div>
      <div class="col-sm-2">
     <span><img src="img/turky.png" width="140" height="135"></span>
        <h4 id="teamname">تركي أبراهيم</h4>
        <p></p>
      </div>
      <div class="row slideanim">
            <div class="col-sm-2">
            <span><img src="img/sasa.png" width="140" height="135"></span>
              <h4  id="teamname">مصطفي ايهاب</h4>
              <p></p>
            </div>
            <div class="col-sm-2">
             <span><img src="img/marco.png" width="140" height="135"></span>
                  <h4  id="teamname">ماركو عماد</h4>
              <p></p>
            </div>
      </div>
  </div>
  <br><a href="team"class="btn btn-default btn-lg" id="yellowabout">لقراءة المزيد</a>   <br><br>

</div>




@endsection
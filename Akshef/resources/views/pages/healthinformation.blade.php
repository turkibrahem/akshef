@extends('layouts.healthinformation')
@section('title')
Health|Information|
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
        <img class="img2" src="img/sport.jpg" alt="صحتــك أولويتــك بالحيــــاة" width="1200" height="700">
        <div class="carousel-caption">
          <p class="text1">صحتــك أولويتــك بالحيــــاة</p>
          <p class="text2">إكشـــــف معك اينما كنت وفي اي وقت</p>
          <a href="ask"><button class="btn btn-info"><p class="text3">تحدث الان</p></button></a>

        </div>      
      </div>
       <form>



<!---------------------------------------------------------------------healthy information------------------------------------------------------------------------------->


  

            <div class="container-fluid">
                <br><br>
                <h3>أهلا بكم في صفحة المعلومات الصحية </h3>
                    <br>
                    <div class="row slideanim col-sm-12">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                 <div class="card" style="width: 24rem;">
                                   <img class="card-img-top" src="img/frot.jpg" alt="the image alt text here">
                                   <div class="card-body">
                                     <h5 class="card-title">أنظمـــة غذائيـــة صحيـــة</h5>
                                     <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                         </h7></p>
                                     <a href="food" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                                   </div>
                                 </div>
                                 </div>
                            
                            <div class="col-sm-3">
                                 <div class="card" style="width: 24rem;">
                                       <img class="card-img-top" src="img/train.jpg" alt="the image alt text here">
                                       <div class="card-body">
                                         <h5 class="card-title">تماريــــن رياضيــــة</h5>
                                         <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                             </h7></p>
                                         <a href="workout" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                                       </div>
                                     </div>
                                     
                             </div>
             
             
                             
                             <div class="col-sm-3">
                                     <div class="card " style="width: 24rem;">
                                       <img class="card-img-top" src="img/stbones.jpg" alt="the image alt text here">
                                       <div class="card-body">
                                         <h5 class="card-title">عظــــام أقــوي</h5>
                                         <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                             </h7></p>
                                         <a href="strongbones" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                                       </div>
                                     </div>
                                    </div>
                    
    
             </div>
                          <!------------second----------->
        
                    <div class="row slideanim col-sm-12">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-3">
                                 <div class="card" style="width: 24rem;">
                                   <img class="card-img-top" src="img/teeth1.jpg" alt="the image alt text here">
                                   <div class="card-body">
                                     <h5 class="card-title">جمال أسنانـــك</h5>
                                     <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                         </h7></p>
                                     <a href="teethbeauty" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                                   </div>
                                 </div>
                                 </div>
                            
                            <div class="col-sm-3">
                                 <div class="card" style="width: 24rem;">
                                       <img class="card-img-top" src="img/eye.jpg" alt="the image alt text here">
                                       <div class="card-body">
                                         <h5 class="card-title">صحة عيونــــك</h5>
                                         <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                             </h7></p>
                                         <a href="eyeshealth" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                                       </div>
                                     </div>
                                     
                             </div>
             
             
                             
                             <div class="col-sm-3">
                                     <div class="card " style="width: 24rem;">
                                       <img class="card-img-top" src="img/smoke.jpg" alt="the image alt text here">
                                       <div class="card-body">
                                         <h5 class="card-title">الاقلاع عن التدخين</h5>
                                         <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                             </h7></p>
                                         <a href="smooking" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                                       </div>
                                     </div>
                                     <br><br><br>
                                    </div>
                                  
                                </div>
             </div>
    
    
    
    
@endsection
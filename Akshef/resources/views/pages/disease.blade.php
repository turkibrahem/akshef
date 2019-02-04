@extends('layouts.disease')
@section('title')
Diseasses
@endSection
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
        <img class="img2" src="img/diseases.jpg" alt="صحتــك أولويتــك بالحيــــاة" width="1200" height="700">
        <div class="carousel-caption">
          <p class="text1">صحتــك أولويتــك بالحيــــاة</p>
          <p class="text2">إكشـــــف معك اينما كنت وفي اي وقت</p>
          <a href="ask"><button class="btn btn-info"><p class="text3">تحدث الان</p></button></a>

        </div>      
      </div>
       <form>




 

        <div class="container-fluid">
                <br><br>
                <h3>أهلا بكم في صفحة الأمـــراض </h3>
            <br>
            <div class="row slideanim col-sm-12">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-3">
                         <div class="card" style="width: 24rem;">
                           <img class="card-img-top" src="img/teeth.jpg" alt="the image alt text here">
                           <div class="card-body">
                             <h5 class="card-title">أمــراض الأسنـــان</h5>
                             <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                 </h7></p>
                             <a href="teeth" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                           </div>
                         </div>
                         </div>
                    
                    <div class="col-sm-3">
                         <div class="card" style="width: 24rem;">
                               <img class="card-img-top" src="img/ramd.png" alt="the image alt text here">
                               <div class="card-body">
                                 <h5 class="card-title"> مــرض الرمــــد</h5>
                                 <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                     </h7></p>
                                 <a href="eyes" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                               </div>
                             </div>
                             
                     </div>
     
     
                     
                     <div class="col-sm-3">
                             <div class="card " style="width: 24rem;">
                               <img class="card-img-top" src="img/heart.jpg" alt="the image alt text here">
                               <div class="card-body">
                                 <h5 class="card-title">أمــراض القلــــب</h5>
                                 <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                     </h7></p>
                                 <a href="heart" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                               </div>
                             </div>
                            </div>
            

     </div>
                  <!------------second----------->

            <div class="row slideanim col-sm-12">
                    <div class="col-sm-5">
              
                         </div>
                    
                    <div class="col-sm-3">
                         <div class="card" style="width: 24rem;">
                               <img class="card-img-top" src="img/bones.jpg" alt="the image alt text here">
                               <div class="card-body">
                                 <h5 class="card-title">أمــراض العظــام</h5>
                                 <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                     </h7></p>
                                 <a href="bones" id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                               </div>
                             </div>
                             
                     </div>
     
     
                     
                     <div class="col-sm-3">
                             <div class="card " style="width: 24rem;">
                               <img class="card-img-top" src="img/cancer.jpg" alt="the image alt text here">
                               <div class="card-body">
                                 <h5 class="card-title">مــرض السرطــــان</h5>
                                 <p class="card-text"><h6> تنقسم أمراض العظام الي عدة امراض مختلفة بعضها يكون مزمن وبعضها يكون مؤقت وقد يمكن علاجه 
                                     </h7></p>
                                 <a href="cancer"  id="boxbtn" class="btn btn-outline-dark">للمزيــد </a>
                               </div>
                             </div>
                             <br><br><br>
                     </div>
            </div>
     </div>           

    


@endsection
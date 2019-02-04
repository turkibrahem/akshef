@extends('layouts.doctors')
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
        <img class="img2" src="img/doctorsmain.jpg" alt="صحتــك أولويتــك بالحيــــاة" width="1200" height="700">
        <div class="carousel-caption">
          <p class="text1">صحتــك أولويتــك بالحيــــاة</p>
          <p class="text2">إكشـــــف معك اينما كنت وفي اي وقت</p>
          <a href="ask"><button class="btn btn-info"><p class="text3">تحدث الان</p></button></a>
</div>
        </div>      
      </div>


<!---------------------------------------------------------------------Heart Section------------------------------------------------------------------------------->


<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center" style="font-family: Droid Sans Arabic; color: #16a3b1; background-color: #ebebeb;">

        <br><br><br><br>

        <div class="row">
        <div class="col-sm-2"></div>   
        <div class="col-sm-8 ">
        <div id="flip" class="container-fluid text-center " style="font-family: Droid Sans Arabic; cursor:pointer;" href="#">
            <span>
                <a href="#">
                <span class="glyphicon glyphicon-chevron-down"></span>
              </a>
              <h5 id="droptxt"> أطبـــــاء أمـــراض الأسنـــان</h5>
            </span>
        </div>
    
    
        <div id="panel" class="container-fluid text-center" style="font-family: Droid Sans Arabic; overflow:auto; background-color:#13394c ;">
        @if(count($teeth)>0)
        <div class="container-fluid" >
            <div class="row" >
            @foreach($teeth as $teeth)
            <div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom:15px;">
            <div id="tables">
             <table id="table1" >
            <tr >
            <td> دكتور :{{$teeth->name}}</td>
            </tr>
            <tr>
                <td> التخصص :{{$teeth->specialty}}</td>
              </tr>
              <tr>
                <td> رقم التليفون : {{$teeth->telephone}}</td>
              </tr>  
              <tr >
                <td  > العنوان :  {{$teeth->Address}} </td>
              </tr>      
            </table>
            </div>
            </div>
            @endforeach
            </div></div>
        @endif
        </div>
        </div>
    </div>
        
    <br>
    
        <div class="row">
        <div class="col-sm-2"></div>   
        <div class="col-sm-8 ">
        <div id="flip1" class="container-fluid text-center " style="font-family: Droid Sans Arabic; cursor:pointer;" href="#">
            <span>
                <a href="#">
                <span class="glyphicon glyphicon-chevron-down"></span>
              </a>
              <h5 id="droptxt"> أطبـــــاء أمـــراض الرمــــد</h5>
            </span>
        </div>
    
    
        <div id="panel1" class="container-fluid text-center" style="font-family: Droid Sans Arabic;overflow:auto; background-color:#13394c ;">
        @if(count($eye)>0)
        <div class="container-fluid" >
            <div class="row" >
            @foreach($eye as $eye)
            <div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom:15px;">
            <div id="tables">
             <table id="table1" >
            <tr >
            <td> دكتور :{{$eye->name}}</td>
            </tr>
            <tr>
                <td> التخصص :{{$eye->specialty}}</td>
              </tr>
              <tr>
                <td> رقم التليفون : {{$eye->telephone}}</td>
              </tr>  
              <tr >
                <td  > العنوان :  {{$eye->Address}} </td>
              </tr>      
            </table>
            </div>
            </div>
            @endforeach
            </div></div>
        @endif
        </div>
        </div>
        </div>
        <br>

        
        <div class="row">
        <div class="col-sm-2"></div>   
        <div class="col-sm-8 ">
        <div id="flip2" class="container-fluid text-center " style="font-family: Droid Sans Arabic;  cursor:pointer;" href="#">
            <span>
                <a href="#">
                <span class="glyphicon glyphicon-chevron-down"></span>
              </a>
              <h5 id="droptxt"> أطبـــــاء أمـــراض القلــــب</h5>
            </span>
        </div>
    
    
        <div id="panel2" class="container-fluid text-center" style="font-family: Droid Sans Arabic; overflow:auto; background-color:#13394c;">
        @if(count($heart)>0)
        <div class="container-fluid" >
            <div class="row" >
            @foreach($heart as $heart)
            <div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom:15px;">
            <div id="tables">
             <table id="table1" >
            <tr >
            <td> دكتور :{{$heart->name}}</td>
            </tr>
            <tr>
                <td> التخصص :{{$heart->specialty}}</td>
              </tr>
              <tr>
                <td> رقم التليفون : {{$heart->telephone}}</td>
              </tr>  
              <tr >
                <td  > العنوان :  {{$heart->Address}} </td>
              </tr>      
            </table>
            </div>
            </div>
            @endforeach
            </div></div>
        @endif
        </div>
        </div>
        </div>
    
        <br>

    
        <div class="row">
        <div class="col-sm-2"></div>   
        <div class="col-sm-8 ">
        <div id="flip3" class="container-fluid text-center " style="font-family: Droid Sans Arabic;  cursor:pointer;" href="#">
            <span>
                <a href="#">
                <span class="glyphicon glyphicon-chevron-down"></span>
              </a>
              <h5 id="droptxt"> أطبـــــاء أمـــراض العظـــــام</h5>
            </span>
        </div>
    
    
        <div id="panel3" class="container-fluid text-center" style="font-family: Droid Sans Arabic; overflow:auto; background-color:#13394c ;">
        @if(count($bones)>0)
        <div class="container-fluid" >
            <div class="row" >
            @foreach($bones as $bones)
            <div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom:15px;">
            <div id="tables">
             <table id="table1" >
            <tr >
            <td> دكتور :{{$bones->name}}</td>
            </tr>
            <tr>
                <td> التخصص :{{$bones->specialty}}</td>
              </tr>
              <tr>
                <td> رقم التليفون : {{$bones->telephone}}</td>
              </tr>  
              <tr >
                <td  > العنوان :  {{$bones->Address}} </td>
              </tr>      
            </table>
            </div>
            </div>
            @endforeach
            </div></div>
        @endif
        </div>
        </div>
        </div>
        <br>


        <div class="row">
        <div class="col-sm-2"></div>   
        <div class="col-sm-8 ">
        <div id="flip4" class="container-fluid text-center " style="font-family: Droid Sans Arabic;  cursor:pointer;" href="#">
            <span>
                <a href="#">
                <span class="glyphicon glyphicon-chevron-down"></span>
              </a>
              <h5 id="droptxt"> أطبـــــاء أمـــراض الأورام</h5>
            </span>
        </div>
    
    
        <div id="panel4" class="container-fluid text-center" style="font-family: Droid Sans Arabic; overflow:auto; background-color:#13394c ;">
        @if(count($cancer)>0)
        <div class="container-fluid" >
            <div class="row" >
            @foreach($cancer as $cancer)
            <div class="col-sm-12 col-md-6 col-lg-6" style="margin-bottom:15px;">
            <div id="tables">
             <table id="table1" >
            <tr >
            <td> دكتور :{{$cancer->name}}</td>
            </tr>
            <tr>
                <td> التخصص :{{$cancer->specialty}}</td>
              </tr>
              <tr>
                <td> رقم التليفون : {{$cancer->telephone}}</td>
              </tr>  
              <tr >
                <td  > العنوان :  {{$cancer->Address}} </td>
              </tr>      
            </table>
            </div>
            </div>
            @endforeach
            </div></div>
        @endif
        </div>
        </div>
        </div>
        <br><br><br><br>
            </div>
            </div>
@endsection
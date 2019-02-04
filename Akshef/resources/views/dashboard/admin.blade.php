@extends('layouts.adminlayout')
@section('title')
Admin|Dashboard|
@endsection
@section('content')

<div class="col-md-12 " id="box1">
<div class="col-md-3"></div>
<button class="btn btn-primary" class="col-md-3"> <a href="/Akshef/public/admin/doctor" class="btna">التحكم في  الاطباء</a></button>
<button class="btn btn-danger" class="col-md-3"> <a href="/Akshef/public/admin/show" class="btna">التحكم في الاعضاء </a></button>
<button class="btn btn-success"class="col-md-3"><a href="/Akshef/public/admin/art " class="btna">التحكم في المقالات </a></button>
 </div>
 
<div class="col-md-12 dash">
    <h1><span class="fa fa-cog" aria-hidden="true" style="color:#070606b6"></span> Dashboard <small style="color:#070606b6">تحكم في موقعك</small></h1>
 </div>
<div class="container-fluid">
<div class="row">
<div class=" well main col-md-12 ">
<div class="panel-body  ">
      <div class="col-md-4 col-xs-12" style="text-align:center;">
        <div class="well dash-box" style="cursor: pointer;">
          <h2 style="color:#070606b6"><span class="fa fa-group" aria-hidden="true"></span> {{$user}}</h2>
          <a href="/Akshef/public/admin/show" style="text-decoration:none; "> <h4 style="color:#070606b6">الاعضاء</h4></a>
      </div>
      </div>
<div class="col-md-4 col-xs-12" style="text-align:center;">
<div class="well dash-box" style="cursor: pointer;">
    <h2 style="color:#070606b6"><span class="fa fa-stethoscope" aria-hidden="true"></span> {{$doc}}</h2>
   <a href="/Akshef/public/admin/doctor"style="text-decoration:none; "> <h4 style="color:#070606b6">الاطباء</h4></a>
</div>
</div>
<div class="col-md-4" style="text-align:center;">
<div class="well dash-box">
   <h2 style="color:#070606b6"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{$x}}</h2>
   <a href="/Akshef/public/admin/art " style="text-decoration:none; "><h4 style="color:#070606b6">المقالات</h4></a>
</div>
</div>
</div>
</div>
<section class="col-md-12" >
<div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">اجدد الاعضاء</h3>
                </div>
                <div class="panel-body">
                @if(count($ut) > 0)
                @foreach($ut as $user)     
               <span  class="th">Name:  </span>  <small class="tb">{{$user->name}}</small> <br>

               <span    class="th">Em@il: </span >  <small style="color:coral; font-size:18px;"> {{$user->email}}</small><br>
               <hr style="border:3px solid coral">
                  @endforeach   
               
                 @else
             <p>لايوجد اعظاء لعرضهم</p>
                    @endif
                  
                </div>
              </div>
          </div>
</section>
                
         
<section class="col-md-12" >
<div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">اجدد الاطباء</h3>
                </div>
                <div class="panel-body">
                @if(count($doct) > 0)
                       @foreach($doct as $doctor)     
                         <span class="th">Name:  </span>              <small style="color:darkcyan ; font-size:18px">{{$doctor->name}} </small><br>
                         <span class="th">Em@il: </span> <small style="color:coral ; font-size:18px" >{{$doctor->email}}</small><br>
                         <span class="th">Specialty: </span>            <small style="color:darkcyan ; font-size:18px">{{$doctor->specialty}}</small><br>
                         <span class="th">PhoneNumber: </span>        <small style="color:coral ; font-size:18px">{{$doctor->telephone}}</small><br>
                         <span class="th">Address: </span>          <small style="color:darkcyan ; font-size:18px">{{$doctor->Address}}</small><br>
                         <span class="th">JoinDate: </span>    <small style="color:coral ; font-size:18px">{{$doctor->created_at}}</small> <br>       
                         <hr style="border:3px solid darkcyan">
                      @endforeach        
                    @else
                  <p>لايوجد اطباء لعرضهم</p>
                   @endif
                  
                </div>
              </div>
          </div>
         
</section>

<section class="col-md-12" >
<div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title"> اجدد المقالات</h3>
                </div>
                <div class="panel-body">
                @if(count($artt) > 0)
                     @foreach($artt as $article)     
                     <h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">{{$article->name}}</h1>   
       <p style="direction:rtl; color:#989898; font-family:Droid Sans Arabic" class="col-sm-12"  class="pull-right"> {!!$article->content!!}</p> 
       <small style="color:#070606b6">Written on {{$article->created_at}} </small>
    <hr style="border:3px solid crimson">
                      @endforeach              
                    @else
                  <p>لايوجد اطباء لعرضهم</p>
                   @endif
                  
                </div>
              </div>
          </div>
         
</section>
<script src="{{ asset('js/app.js') }}"></script>

@endsection
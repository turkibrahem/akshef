@extends('layouts.adminlayout')
@section('content')
<br/>
@if(count($art)>0)
<h2 class="text-center" style="direction:rtl;  font-family:Droid Sans Arabic; color:crimson">مقالات:-</h2>
      @foreach($art as $art)
      <div class="form-group"clas="col-sm-12">
      <fieldset style="border 2px coral solid"> 
    <h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">{{$art->name}}</h1>
      <p style="direction:rtl; color:#989898; font-family:Droid Sans Arabic; font-size:18px;" class="col-sm-12"  class="pull-right">{{$art->content}}</p>
<h4 style="font-weight:bold; font-family:Georgia ; color:#13394c" class="text-center "> كتب :{{ $doc->name }}  </h4>
<hr style="border:1px solid #febf01">
<fieldset>
</div>
      @endforeach
      @else
      <p>لايوجد نتائج للعرض</p>
      @endif
@endsection
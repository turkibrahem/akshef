@extends('layouts.adminlayout')
@section('content')
@if(count($dis)>0)
<h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">المقالات الخاصة بالامراض </h1>
      @foreach($dis as $dis)
<div class="form-group"clas="col-sm-12" style="height:auto;">
      <h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">{{$dis->name}}</h1>
      <p style="direction:rtl; color:#989898; font-family:Droid Sans Arabic" class="col-sm-12"  class="pull-right">{{$dis->content}}</p>
</div>
<form action="{{  route('dis.destroy', ['id' => $dis->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="form-group"  class="col-md-12">
<div class="col-md-6"></div>
        <button type="submit" class="btn btn-danger" class="col-md-6" >حذف</button>
    </div>
</form>
            
      @endforeach

      @else
      <p>لايوجد نتائج للعرض</p>
      @endif
      <hr>
      @if(count($art)>0)
      <h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">المقالات الخاصة بالنصائج الطبية </h1>
      @foreach($art as $art)
<div class="form-group"clas="col-sm-12">
      <h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">{{$art->name}}</h1>
      <p style="direction:rtl; color:#989898; font-family:Droid Sans Arabic" class="col-sm-12"  class="pull-right">{{$art->content}}</p>
</div>
<form action="{{  route('art.destroy', ['id' => $art->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="form-group" class="col-md-12">
    <div class="col-md-6"></div>
        <button type="submit" class="btn btn-danger" class="col-md-6" >حذف</button>
    </div>
</form>
      @endforeach

      @else
      <p>لايوجد نتائج للعرض</p>
      @endif
@endsection
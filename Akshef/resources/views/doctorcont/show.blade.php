@extends('layouts.app')
@section('content')
@if(count($art)>0)
    @foreach($art as $art)
    <h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">{{$art->name}}</h1>
    <p style="direction:rtl; color:#989898; font-family:Droid Sans Arabic" class="col-sm-12">
        {{$art->content}}
    </p>
    <div class="form-group" class="col-md-12">
    <span class="col-md-3"></span>
            <a href="{{  route('art.edit', ['id' => $art->id]) }}" class="btn btn-default" class="col-md-3" >تعديل</a>
            <form action="{{  route('delete.art', ['id' => $art->id]) }}" method="POST" class="col-md-3">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger">حذف</button>
    </div>
</form>          
<hr>
            @endforeach
           @endif
           @if(count($dis)>0)
            @foreach($dis as $dis)
    <h1 style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic" class="col-sm-12">{{$dis->name}}</h1>
    <p style="direction:rtl; color:#989898; font-family:Droid Sans Arabic" class="col-sm-12">
        {{$dis->content}}
    </p>
    <div class="form-group" class="col-md-12">
    <span class="col-md-3"></span>
            <a href="{{  route('dis.edit', ['id' => $dis->id]) }}" class="btn btn-default" class="col-md-3" >تعديل</a>
            <form action="{{  route('delete.dis', ['id' => $dis->id]) }}" method="POST" class="col-md-3">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger">حذف</button>
    </div>
</form>          
<hr>
            @endforeach
            @else
            <p style="direction:rtl; color:coral; text-align:center; font-family:Droid Sans Arabic; font-size:18px" class="col-sm-12">لايـــــــوجد نتـــــــائــــــــــــج للعرض </p>
            @endif
@endsection
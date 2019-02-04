@extends('layouts.app')
@section('content')
<div class="col-md-12 col-xs-12" style="margin-top:10px;">
<div class="row">
    <h1 style="direction:rtl" class="col-md-12">عمل استشارة</h1>
    {!! Form::open(['action' => 'HomeController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group" class="col-md-6">
            {{Form::label('Consultation', 'Consultation')}}
            {{Form::textarea('Consultation', '', ['class' => 'form-control', 'placeholder' => 'استشارة','style'=>'direction:rtl','id'=>'my-editor'])}}
        </div>
        <div class="col-md-6">
        <select name="doc" style="width:150px; height:40px; margin-right:15px;">

        <optgroup label="رمد">
          @foreach($eye as $eye)
            <option value="{{$eye->id}}">{{$eye->name}}</option>
          @endforeach
          </optgroup>

         <optgroup label="قلب">
          @foreach($heart as $heart)
            <option value="{{$heart->id}}">{{$heart->name}}</option>
          @endforeach
          </optgroup>
          <optgroup label="سرطان">
          @foreach($cancer as $cancer)
            <option value="{{$cancer->id}}">{{$cancer->name}}</option>
          @endforeach
          </optgroup>
          <optgroup label="عظام">
          @foreach($bones as $bones)
            <option value="{{$bones->id}}">{{$bones->name}}</option>
          @endforeach
          </optgroup>
          <optgroup label="أسنان">
          @foreach($teeth as $teeth)
            <option value="{{$teeth->id}}">{{$teeth->name}}</option>
          @endforeach
          </optgroup>
          </select>
     <div class="col-md-6 col-xs-12"></div>
        {{Form::submit('ارسال', ['class'=>'btn btn-info' ,'style'=>'width:150px; padding:8px 0;'])}}
        {!! Form::close() !!}
     </div>
    
    <div class="row">
    <a href="/Akshef/public/home" class="btn btn-warning" class="col-sm-12"  style="width:150px; padding:8px 0">عودة</a>
    </div>
    </div>
@endsection
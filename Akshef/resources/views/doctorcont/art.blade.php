@extends('layouts.app')
@section('content')
<form action="{{  route('store.doctor')}}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="col-md-12 col-xs-12" style="margin-top:10px;">
<div class="row">
    <h1 style="direction:rtl" class="col-md-12">عمــل مقــــال</h1>
        <div class="form-group" class="col-md-6">
            {{Form::label('name', 'name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'العنوان','style'=>'direction:rtl','id'=>'my-editor'])}}
            {{Form::label('content', 'content')}}
            {{Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'المقال','style'=>'direction:rtl','id'=>'my-editor'])}}
        </div>
        <div class="col-md-6">
        <select name="cat" style="width:150px; height:40px; margin-right:15px;">
        @foreach($art as $art)
    <option value="{{$art->link}}">{{$art->category}}</option>
        @endforeach
        <div class="col-md-6 col-xs-12"></div>
        </select>
        {{Form::submit('انشاء', ['class'=>'btn btn-info' ,'style'=>'width:150px; padding:8px 0;'])}}
        {!! Form::close() !!}
     </div>
    </div>

</form>
@endsection
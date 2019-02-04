@extends('layouts.adminlayout')
@section('content')
<form action="{{  route('doctor.save')}}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
    <table class="table table-primary table-bordered table-striped " class=" col-md-12 col-xs-12">
  <thead class="table-danger">
    <tbody>
        <td> {{Form::label('name', 'name')}}</td>
        <td> {{Form::text('name'," ", [ 'class' => 'form-control', ])}}</td>
         <td> {{Form::label('email', 'email')}}</td>
         <td> {{Form::text('email', " ", [ 'class' => 'form-control', ])}} </td>
        <td>  {{Form::label('specialty', 'specialty')}}</td>
         <td>  {{Form::text('specialty', " ", [ 'class' => 'form-control', ])}}</td>
         <td>   {{Form::label('telephone', 'telephone')}}</td>
         <td>   {{Form::number('telephone', " ", [ 'class' => 'form-control', ])}}</td>
         <td>   {{Form::label('address', 'address')}}</td>
         <td>   {{Form::text('Address', " ", [ 'class' => 'form-control', ])}}</td>
         <td>  {{Form::label('Password', 'Password')}}</td>
         <td>  <input type="password" name="password" value="" ></td>
     <td><input type="submit" value="حفظ" class="btn"></td>
      </form>
@endsection
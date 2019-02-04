@extends('layouts.adminlayout')
@section('content')
<form action="{{  route('doc.update', ['id' => $doc->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
    <table class="table table-primary table-bordered table-striped " class=" col-md-12 col-xs-12">
  <thead class="table-danger">
    <tbody>
        <td> {{Form::label('name', 'name')}}</td>
        <td> {{Form::text('name', $doc->name, [ 'class' => 'form-control', ])}}</td>
         <td> {{Form::label('email', 'email')}}</td>
         <td> {{Form::text('email', $doc->email, [ 'class' => 'form-control', ])}} </td>
        <td>  {{Form::label('specialty', 'specialty')}}</td>
         <td>  {{Form::text('specialty', $doc->specialty, [ 'class' => 'form-control', ])}}</td>
         <td>   {{Form::label('telephone', 'telephone')}}</td>
         <td>   {{Form::text('telephone', $doc->telephone, [ 'class' => 'form-control', ])}}</td>
         <td>   {{Form::label('address', 'address')}}</td>
         <td>   {{Form::text('Address', $doc->Address, [ 'class' => 'form-control', ])}}</td>
         <td>  {{Form::label('Password', 'Password')}}</td>
         <td>  <input type="password" name="password" value="$doc->password"></td>
    {{ method_field('PUT') }}
     <td><input type="submit" value="حفظ" class="btn"></td>
      </form>
@endsection
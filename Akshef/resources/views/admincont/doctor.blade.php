@extends('layouts.adminlayout')
@section('content')
<div class="col-md-12 " id="box1" style="margin-top:20px; margin-bottom:20px; padding:20px;">
<div class="col-md-4"></div>
<a href="/Akshef/public/admin" class="btn btn-primary" class="col-md-4">العودة الى صفحة التحكم</a>
<a href="/Akshef/public/admin/addDoctor" class="btn btn-success" class="col-md-4">اضافة طبيب </a>
 </div>
@if(count($doc) > 0)
<table class="table table-primary table-bordered table-striped " class=" col-md-12 col-xs-12">
  <thead class="table-danger">
    <tr>
      <td class="text-center">الاسم</td>
      <td class="text-center">البريد الالكتروني</td>
      <td class="text-center">التخصص</td>
      <td class="text-center">رقم الهاتف</td>        
      <td class="text-center">العنوان </td>          
      <td class="text-center">تاريخ الانظمام</td>
      <td class="text-center">تعديل يبانات الطبيب</td>
      <td class="text-center">المقالات</td>
      <td class="text-center">حذف طبيب</td>
    </tr>
    </thead>
    <tbody>
   @foreach($doc as $user)     
   <tr>
    <td class="text-center">{{$user->name}} </td>
    <td class="text-center">{{$user->email}}</td>
    <td class="text-center">{{$user->specialty}}</td>
    <td class="text-center">{{$user->telephone}}</td>
    <td class="text-center">{{$user->Address}}</td>
    <td class="text-center">{{$user->created_at}}</td>
    <td class="text-center">
<a href="{{  route('doc.edit', ['id' => $user->id]) }}" class="btn btn-info"style="color:#000">تعديل</a>
    </td>
    <td class="text-center"> 
    <form action="{{  route('show.art', ['id' => $user->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('GET') }}
    <div class="form-group">
        <button type="submit" class="btn btn-primary">مقالات</button>
    </div>
</form>
    </td>
    <td class="text-center"> 
    <form action="{{  route('doctor.destroy', ['id' => $user->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="form-group">
        <button type="submit" class="btn btn-danger">حذف</button>
    </div>
</form>
            
            </td>
            
    </tr>
    @endforeach   
    </tbody>
  </table>           
  @else
<p>لايوجد اطباء لعرضهم</p>
 @endif

@endsection
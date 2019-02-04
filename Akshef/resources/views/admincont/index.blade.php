@extends('layouts.adminlayout')
@section('content')
<div class="col-md-12 " id="box1" style="margin-top:20px; margin-bottom:20px; padding:20px;">
<div class="col-md-5"></div>
<a href="/Akshef/public/admin" class="btn btn-primary" class="col-md-6">العودة الى صفحة التحكم</a>
</div>
@if(count($user) > 0)

<table class="table table-primary table-bordered table-striped ">
  <thead class="table-danger">
    <tr>
      <td >الاسم</td>
      <td >البريد الالكتروني</td>
      <td >تاريخ الانظمام</td>
      <td>حذف</td>
    </tr>
    </thead>
    <tbody>
   @foreach($user as $user)     
   <tr>
    <td>{{$user->name}} </td>
    <td>{{$user->email}}</td>
    <td>{{$user->created_at}}</td>
    <td>
    <form action="{{  route('user.destroy', ['id' => $user->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="form-group">
        <button type="submit" class="btn btn-danger">DELETE</button>
    </div>
</form>
            
            </td>
    </tr>
    @endforeach   
    </tbody>
  </table>           
  @else
<p>لايوجد اعظاء لعرضهم</p>
 @endif

@endsection
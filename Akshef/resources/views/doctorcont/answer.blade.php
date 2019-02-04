@extends('layouts.app')
@section('content')
    <h1>answer</h1>
    <h1>{{$cons->Consultation}}</h1>
    <form action="{{  route('answer.update', ['id' => $cons->id]) }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
            {{Form::label('Answer', 'Answer')}}
            {{Form::textarea('Answer', $cons->Answer, [ 'class' => 'form-control', 'placeholder' => 'Answer Text','id'=>'summary-ckeditor'])}}
        </div>
    {{ method_field('PUT') }}
    <div class="form-group">
       <input type="submit" value="send" class="btn">
</form>
@endsection
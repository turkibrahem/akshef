@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row" style="margin-bottom:20px;"> 
     <div class="col-sm-2"></div>
     
     <div class="col-sm-3"> <a href="/Akshef/public/doctor/disease" class="btn btn-primary" class="col-md-4" >انشاء مقال خاص بالامراض</a></div>
       <div class="col-sm-3"> <a href="/Akshef/public/doctor/article" class="btn btn-danger" class="col-md-4">انشاء مقال عام </a></div>
       <div class="col-sm-3"> <form action="{{  route('article.show', ['id' =>Auth::user( )->id]) }}" method="POST"  >
        {{ csrf_field() }}
        {{ method_field('GET') }}
        <button type="submit" class="btn btn-primary" >مقالاتي</button>
        </form>
    </div>
    <div class="col-sm-1"></div>
 </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Doctor|Dashboard|</div>
              
              @if(count($cons) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Consultation</th>
                                <th>answer</th>
                            </tr>
                            @foreach($cons as $cons)
                                <tr>
                                    <td style="color:#000">{{$cons->Consultation}}</td>
                                    <td><a href="{{  route('answer.edit', ['id' => $cons->id]) }}" class="btn btn-default"style="color:#000">answer</a></td> 
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no consulation</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
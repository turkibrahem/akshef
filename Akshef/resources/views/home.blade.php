@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                <a href="/Akshef/public/home/create" class="btn btn-success">Create Consultation</a>
                <h3>Your Consultation</h3>

              @if(count($cons) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Consultation</th>
                                <th>Answer</th>
                                <th></th>
                            </tr>
                            @foreach($cons as $cons)
                                <tr>
                                    <td style="color:#000">{{$cons->Consultation}}</td>
                                    <td style="color:#000">{{$cons->Answer}}</td>
                                   
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
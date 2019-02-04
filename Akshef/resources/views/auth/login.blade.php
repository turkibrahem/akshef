@extends('layouts.login')

@section('content')
<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default" style="background-color: rgba(21, 163, 181, 0.6);">
                <div class="panel-heading" style="direction:rtl; color:#898989; font-size:20px;
                background-color: rgba(225, 225, 225, 0.8); text-align:center;" >تسجيل الدخول</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                          <div class="col-md-2"></div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="أدخل البريد الالكتروني " style="direction:rtl; font-size:18px;">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="كلمة السر " style="direction:rtl; font-size:18px;">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرني
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="background-color: rgba(21, 163, 181, 0.6); border:none;">
                                    تسجيل الدخول
                                </button>
                                     <br>
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #fff; direction:rtl;">
                                 هل نسيت كلمة المرور؟

                                </a>
                            </div>
                        </div>
                    </form>
                    <a href="landingpage" class="btn btn success">عودة الى الصفحة الرئيسية </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

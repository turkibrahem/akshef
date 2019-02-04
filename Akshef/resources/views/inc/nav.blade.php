
<div class="container-fluid">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>  
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav nav-tabs nav-justified" style="direction: rtl;"> 
            <li id="logo"><img id="logo1" src="img/logo.png "></li>
            <li><a href="landingpage" id="text">الصـفحـة الـرئيسيـــة</a></li>
            <li><a href="info" id="text">معلومات صحـيــــة</a></li>
          <li><a href="ask" id="text">استشـر طبـيـبــك</a></li>
          <li><a href="diseas" id="text">الامـــــراض</a></li>
          <li><a href="doctors" id="text">بيانات الأطبــاء</a></li>
          
          <li>
                    <form action="{{URL::to('/search')}}" method="POST" role="search">
                        {{ csrf_field() }}
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="ابحث عن موضوعك" name="q"><span><button class="btn btn-danger" type="submit">

                            <i class="fa fa-search"></i>
                          </button></span>
                    </div>
                   </form>
              </li> 

              @if (Auth::guest())
                            <li><a href="{{ route('login') }}"class="btn btn-warning" id="warning" style="padding:5px;">تسجيل الدخول </a></li>
                            <li><a href="{{ route('register') }}" class="btn btn-warning" id="warning"  style="padding:5px;">التسجيل</a></li>
                            <li><a href="callus" class="btn btn-primary" id="primary"  style="padding:5px;">أتصل بنــا</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:#1339ac !important">
                                                     تسجيل الخروج
                                        </a>
                                        <a href="home" style="color:#1339ac !important">الصفحة الشــــخصية</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
           </ul>
        </div>
    </nav>
</div>       






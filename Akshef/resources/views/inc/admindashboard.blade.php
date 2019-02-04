<nav class="navbar navbar-default ss">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!------
          <a class="navbar-brand" href="#">4m</a>
          ------>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <div class="container">
          <ul class="nav navbar-nav navbar-primary nav" style="box-sizing:borderbox;">
          @if (Auth::guest())
                            <li><a href="{{ route('login') }}">تسجيل الدخول </a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                  تسجيل الخروج
                                        </a>
                                            <a href="#">
                                                الصفحة الرئيسية
                                            </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                       
    </nav>
    <script src="{{ asset('js/app.js') }}"></script>

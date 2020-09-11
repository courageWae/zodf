<nav class="navbar edu-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route('index') }}" class="navbar-brand  data-scroll"><img src="{{ asset('user/images/logo1.png') }}" style="width: 100px; height: 50px;" alt=""></a>
        </div>

        <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-right">
                <li><a data-scroll href="{{ route('index') }}">Home</a></li>
                <li><a data-scroll href="#">About</a>
                    <ul class="dropdown list-unstyled">
                        <li><a href="{{ route('about') }}">About ZODF</a></li>
                        <li><a href="{{ route('aboutproject') }}">About Project Fund</a></li>
                    </ul>
                    <!-- dropdown end -->
                </li>
                <li><a data-scroll href="#">Team</a>
                    <ul class="dropdown list-unstyled">
                        <li><a href="{{ route('board') }}">The Board</a></li>
                        <li><a href="{{ route('executive') }}">The Executive Management</a></li>
                        <li><a href="{{ route('staff') }}">Staff</a></li>
                    </ul>
                    <!-- dropdown end -->
                </li>
                <li><a data-scroll href="{{ route('projects') }}">Projects</a></li>
                <li><a data-scroll href="{{ route('news') }}">News</a></li>
                <li><a data-scroll href="{{ route('gallery') }}">Gallery</a></li>
                <li><a data-scroll href="{{ route('contact') }}">Contact</a></li>
                @guest
                    <li class="nav-item">
                        <a data-scroll href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <li class="dropdown-list-box-02">
                        <a href="" data-scroll="">{{ Auth::user()->name }} <span class="caret"></span></a>

                        <ul class="dropdown list-unstyled">
                            <li><a class="dropdown-item" href="{{ route('home') }}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                Logout
                            </a></li>
                            

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
                <li>
                    {{-- <a data-scroll href="#"><i class="fa fa-search search_btn"></i></a>
                    <div id="search">
                          <button type="button" class="close">×</button>
                          <form>
                                <input type="search" value="" placeholder="Search here...."  required/>
                                <button type="submit" class="btn btn_common blue">Search</button>
                          </form>
                    </div> --}}
                </li>
                
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
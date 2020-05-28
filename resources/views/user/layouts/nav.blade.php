<nav class="navbar edu-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route('index') }}" class="navbar-brand  data-scroll"><img src="user/images/logo.ng" alt=""><span>ZODF Projects</span></a>
        </div>

        <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-right">
                <li><a data-scroll href="{{ route('index') }}">Home</a></li>
                <li><a data-scroll href="{{ route('about') }}">About Us</a></li>
                <li><a data-scroll href="{{ route('projects') }}">Projects</a></li>
                <li><a data-scroll href="{{ route('contact') }}">Contact</a></li>
                <li><a data-scroll href="#"><i class="fa fa-search search_btn"></i></a>
                    <div id="search">
                          <button type="button" class="close">×</button>
                          <form>
                                <input type="search" value="" placeholder="Search here...."  required/>
                                <button type="submit" class="btn btn_common blue">Search</button>
                          </form>
                    </div>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<!-- Begin .header-top -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12 header-top-left">
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone top-icon"></i> +233 342 4345 4</li>
                    <li><i class="fa fa-envelope top-icon"></i> info@zodf.gov.gh</li>
                </ul>
            </div>
            <div class="col-sm-6 col-xs-12 header-top-right">
                <ul class="list-unstyled">
                    @guest
                    <li><a href="{{ route('register') }}"><i class="fa fa-user-plus top-icon"></i> Sing up</a></li>
                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in top-icon"></i>Login</a></li>
                    @else
                    <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out top-icon"></i>Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Ends: .header-top -->
<!doctype html>
<html class="no-js" lang="zxx">

@include('user.layouts.head')

<body class="register">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <header id="header">
        @include('user.layouts.topnav')
        <!-- Ends: .header-top -->

        <div class="header-body">
            @include('user.layouts.nav')

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <h1>Register For Project</h1>
                            <p><span><a href="{{ route('index') }}">Home <i
                                            class='fa fa-angle-right'></i></a></span><span class="b-active">
                                    Register</span></p>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>
    <!--  End header section-->


    <!-- Teachers Area section -->
    <section class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form action="{{ route('saveregister') }}" class="learnpro-register-form" method="POST">
                        <p class="lead">Register New Account</p>
                        @csrf
                        
                            <input type="hidden" name="project_id" value="{{ $projects->id }}">
                        
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input autocomplete="off" name="firstname" class="form-control" placeholder="First Name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input autocomplete="off" name="lastname" class="form-control" placeholder="Last Name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input class="required form-control" name="email" placeholder="Email *" type="email">
                        </div>
                        <div class="form-group">
                            <label for="">Active Phone Number</label>
                            <input class="required form-control" name="phone" placeholder="Phone *" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Date Of Birth</label>
                            <input class="required form-control" name="dob" placeholder="Date Of Birth *" type="date">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <input class="required form-control" name="gender" placeholder="Gender *" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input class="required form-control" name="address" placeholder="Address" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">City</label>
                            <input class="required form-control" name="city" placeholder="City *" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Nationality</label>
                            <input class="required form-control" name="country" placeholder="Nationality *" type="text">
                        </div>

                        <div class="form-group register-btn">
                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->



    <!-- Footer Area section -->
    @include('user.layouts.footer')
    <!-- ./ End Footer Area section -->
    <!-- ============================
    JavaScript Files
    ============================= -->
    @include('user.layouts.script')
</body>

</html>

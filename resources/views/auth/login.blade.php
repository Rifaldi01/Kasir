<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{URL::to('images/logo/logo1.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{URL::to('images/logo/logo1.png')}}" type="image/x-icon">
    <title>Catatan Perjalanan</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/fontawesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{URL::to('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/responsive.css')}}">
</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="theme-loader">
        <div class="loader-p"></div>
    </div>
</div>
<!-- Loader ends-->
<nav class="navbar navbar-dark" style="background:#9FD1FE;">
    <div class="container-fluid">
        <a class="navbar-brand ms-3" href="#">
            <img src="{{asset('images/logo/logo1.png')}}" alt="" width="35" height="auto">
            Catatan Perjalanan
        </a>
    </div>
</nav>
<!-- page-wrapper Start-->
<section>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card" style="background: #D8ECFE;">
                    <form class="theme-form login-form shadow-lg "
                          style="border-radius: 20px; background: linear-gradient( #F378EB, #00CBFF)"
                          action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="text-center mb-4">
                            <img style="width: 17%;" src="{{asset('images/logo/logo1.png')}}" alt="">
                            <h4 >Login</h4>
                        </div>
                        <div class="form-group">
                                <input class="form-control " style="border-radius: 10px;" type="email" name="email" required=""
                                       placeholder="Email">
                        </div>
                        <div class="form-group">
                                <input class="form-control" style="border-radius: 10px;" type="password" name="password" required=""
                                       placeholder="Password">
                        </div>
                        <div class="form-group d-grid col-12 mt-4">
                            <button class="btn btn-primary col-12 shadow" type="submit" style="border-radius: 10px;">Sign in</button>
                        </div>
                        <div class="form-group d-grid col-12 mt-2">
                            <a href="{{route('register')}}" class="btn btn-success col-12 shadow" type="submit" style="border-radius: 10px;">Register</a>
                        </div>
                        <div class="login-social-title">
                            <h5>Sign in with Google</h5>
                        </div>
                        <div class="form-group ">
                            <ul class="login-social">
                                <li><a href="https://www.linkedin.com/login"><i
                                            class="fa fa-google  col-12 text-danger"></i></a></li>

                            </ul>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-wrapper end-->
<!-- latest jquery-->
<script src="{{URL::to('assets/js/jquery-3.5.1.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{URL::to('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{URL::to('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{URL::to('assets/js/sidebar-menu.js')}}"></script>
<script src="{{URL::to('assets/js/config.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{URL::to('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{URL::to('assets/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- Plugins JS start-->
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{URL::to('assets/js/script.js')}}"></script>
<!-- login js-->
<!-- Plugin used-->
</body>
</html>



<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Default meta data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fff">

    <!-- Meta info -->
    <meta name="author" content="Justine Alvarez">
    <!-- Website Description -->
    <meta name="description" content="#">
    <meta name="keywords" content="Voctech Blog, technology, innovation, education, digital skills, online learning, career development, tech trends">

    <!-- Website Title -->
    <title>Dashboard | Blog</title>

    {{-- Website avatar --}}
    <link rel="icon" type="image/x-icon" href="{{'/assets/img/vclogo.png'}}" />
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('styles/dashboard_custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{asset('css/dashboard_custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('css/guest.css')}}" rel="stylesheet" />

    {{-- TinyMce --}}
    <x-head.tinymce-config/>
  
</head>

<body id="admin-page">
@if (auth()->check())
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.includes.admin_nav') 
        
    </div>
    <!-- /#wrapper -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                    <br><br>
                    @yield('scripts')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        @yield('error')
    </div>
@else
    <div class="container-center">
        <div class="g-card">
            <p class="text-center-1">You cannot access this page<br>You are a guest!</p>
            <br>
            <a class="login-1" style="margin-right: 10px;" href="{{ route('login') }}">Login</a>
            <a class="home-1" style="margin-right: 10px;" href="{{ route('homepage') }}">Home</a>
            <a class="signup-1" href="{{ route('register') }}">Sign Up</a>
        </div>
    </div>
@endif
<!-- pagination -->
@yield('pagination') 

<!-- jQuery -->
<script src="{{asset('js/app2.js')}}"></script>
<script src="{{asset('js/libs.js')}}"></script>

{{-- Custom Font Awesome kit --}}
<script src="https://kit.fontawesome.com/2824446f9a.js" crossorigin="anonymous"></script>

<!-- Custom Scripts -->
<script src="{{asset('js/scripts/scroll_to_top.js')}}"></script>
<script src="{{asset('js/scripts/scroll_indicator.js')}}"></script>
<script src="{{asset('js/scripts/sweet_alert.js')}}"></script>

</body>
</html>

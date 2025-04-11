<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Voctech | Create Blog</title>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/guest.css" rel="stylesheet" />

        {{-- Website Icon --}}
         <x-head.web_icon/>
    
        {{-- TinyMCE --}}
        <x-head.tinymce-config/>

    </head>
    <body>
        @if (Auth::check())
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">

                {{-- Component for navbar brand --}}
                <x-navbar_brand></x-navbar_brand>

                <button class="navbar-toggler nav-obj" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    
                     {{-- Component for navbar menu --}}
                     <x-navbar_menu></x-navbar_menu>

                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background: linear-gradient(360deg, #b4e1f7, #049be5); padding-bottom: 3rem;">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h3>Create a Blog</h3>
                            <p class="subheading">Transform your ideas into engaging content and connect with like-minded individuals by creating a blog</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="form-group my-5">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="bordered col-md-5" style="padding: 40px">

                        <center>
                           
                                <h4>CREATE BLOG</h4>
                            
                        </center>           

                        <div class="row mt-4">
                            <div class="col-sm-12">
                                <form class="form-group" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="mb-2">Title:</label>
                                        @error('title')
                                            <span style="color: red">Max Characters: 255</span>
                                        @enderror
                                        <input type="text" name="title" id="title" class="form-control" value="Voctech Blog" required>
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <label for="short_description" class="mb-2">Short Description:</label>
                                        @error('short_description')
                                            <span style="color: red">Max Characters: 255</span>
                                        @enderror
                                        <input type="text" name="short_description" id="short_description" class="form-control" value="Voctech blog for students" required>
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <label for="content" class="mb-2">Content:</label>
                                        @error('content')
                                            <span style="color: red">required</span>
                                        @enderror
                                        <textarea name="content" id="myeditorinstance" class="form-control" rows="5" required>Enter Content</textarea>                                 
                                    </div>

                                    <br>

                                    <div class="form-group">
                                        <label for="picture" class="mb-2">Upload Picture:</label>
                                        <input type="file" name="picture" id="picture" class="form-control">
                                    </div>

                                    <div class="row align-right mt-2">
                                        <div class="btn btn-group" style="margin-top: 20px">
                                            <button type="submit" class="btn btn-success button-hover">Post</button>
                                        </div> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <br>
        <br> 
        <!-- Footer-->
        <x-footer></x-footer>
        @else
            <div class="container-center">
                <div class="g-card">
                    <p class="text-center-1" style="font-size: 15px;">You cannot access this page<br>You are a guest!</p>
                    <br>
                    <a class="login-1" style="margin-right: 10px;" href="{{ route('login') }}">Login</a>
                    <a class="home-1" style="margin-right: 10px;" href="{{ route('homepage') }}">Home</a>
                    <a class="signup-1" href="{{ route('register') }}">Sign Up</a>
                </div>
            </div>
        @endif
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

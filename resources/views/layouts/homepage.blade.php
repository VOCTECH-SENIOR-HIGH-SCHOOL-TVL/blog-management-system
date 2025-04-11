<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Voctech Blog</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/app.css" rel="stylesheet" />

        {{-- Website Icon --}}
        <x-head.web_icon/>

        {{-- TinyMCE --}}
        <x-head.tinymce-config/>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container">

                {{-- Component for navbar brand --}}
                <x-navbar_brand></x-navbar_brand>

                {{-- Component for navbar menu --}}
                <x-search_bar></x-search_bar>

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
            <div class="container position-relative px-4 px-lg-5 ">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <center>
                                <h3>VocTech Blog</h3>
                                <span class="subheading text-light">Get all the news related to Voctech in one easy-to-access places</span>     
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
                <div class="container-2 my-5">
                    <div class="post-grid-2">
                        @if (Session::has('success'))
                            <div class="sessionsuccess">
                                <center>
                                    {{session('success')}}
                                </center> 
                            </div> 
                        @endif
                        <div class="container sessiondanger">
                            @if (Session::has('failure'))
                                <div class="alert">
                                    {{session('failure')}}    
                                </div> 
                            @endif
                        </div>
                        @if (count($posts) > 0)
                            @foreach ($posts as $post)
                                <div class="post-card-2">
                                    <a href="{{ route('post.index', ['slug' => $post->slug]) }}">
                                        <img class="post-image-2"

                                        @if ($post->picture == true)

                                        src="{{$post->picture}}"
                                                                                        
                                        @endif

                                        alt="See Post"
                                        title="See Post">
                                    </a>
                                    <div class="post-content-2">
                                        <p class="post-title-3 text-capitalize"><b>{{Str::limit($post->title, 40)}}</b></p>
                                        <p class="post-text-2">{{ Str::limit($post->short_description, 80) }}</p>
                                    </div>
                                    <div class="post-footer">
                                        <span class="span-1 text-capitalize">By <u>{{ $post->user->first_name }}</u></span>
                                        <span class="date-publish">
                                            <i class="fa fa-calendar fa-fw"></i> {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                </div>
                        @else
                            <center>
                            <p class="post-text-2">Sorry, there are no posts about this topic.<a href="#" class="text-danger" style="text-decoration: none;"> Try to search again.</a><p>
                                <div class="loader">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                                <br>
                                <img 
                                height="150" 
                                src="assets/img/unique.gif"
                                alt="GIF"
                                title="GIF">
                                <br>
                                <br>
                            </center>
                        @endif
                        <div class="container m-0 justify-content-center">
                            <div class="pagination-1">
                                
                                    {{$posts->links('pagination::bootstrap-5')}}
                                
                            </div>
                        </div>
                    </div>
                </div>
        <!-- Footer-->
        <x-footer></x-footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <!-- <script src="{{asset('js/scripts/search.js')}}"></script> -->
    </body>
</html>

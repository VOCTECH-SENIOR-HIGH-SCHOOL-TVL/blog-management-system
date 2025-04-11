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
  <meta name="keywords" content="blog nature pets sport">

  <!-- Website Title -->

  <title>Voctech Blog | Login</title>

  <!-- Website Avatar -->

  <link rel="icon" type="image/x-icon" href="{{'assets/img/vclogo.png'}}" />


  <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/fontawesome-free/css/all.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{asset('css/styles.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  {!! htmlScriptTagJsApi() !!}



</head>

<body class="masthead" style="background: linear-gradient(360deg, #b4e1f7, #049be5);">
  <div class="row gx-3 gx-lg-6 justify-content-center bordered" style="padding-top: 5rem; padding-bottom: 50vh;">
    <div class="card border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Log in to Voctech Blog</h1>
          </div>

            {{--  --}}
          <form class="user" method="POST" action="{{ route('login') }}">

            @csrf

            <div class="form-group">
              <input id="exampleInputEmail" type="email" class="form-control form-control-user
              @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>
                      {{ $message }}
                    </strong>
                  </span>
                @enderror
            </div>
            <div class="form-group">
              <input id="exampleInputPassword" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>
                    {{ $message }}
                  </strong>
                </span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              {{ __('Log In') }}
            </button>
          </form>
          <hr>
          <div class="text-center small">
            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">
                {{ __('Forgot password?') }}
              </a>
            @endif
          </div>
          <div class="text-center">
            <a class="small" href="{{route('register')}}">Create new account!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"   integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"   crossorigin="anonymous"></script>


</body>

</html>

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

  <title>Voctech Blog | Register</title>

  <!-- Website Avatar -->

  <link rel="icon" type="image/x-icon" href="{{'assets/img/vclogo.png'}}" />

  <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/fontawesome-free/css/all.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('../css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{asset('../css/styles.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body class="masthead" style="background: linear-gradient(360deg, #b4e1f7, #049be5);">
  <div class="row gx-3 gx-lg-6 justify-content-center bordered asie" style="padding-bottom: 50vh;">
    <div class="card border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Sign up to Voctech Blog</h1>
          </div>
          <form class="user" method="POST" action="{{ route('store.user') }}" autocomplete="off">
            @csrf
            <div class="form-group">
              <div class="col mb-3">
                  <input id="first_name" type="text" class="form-control form-control-user @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name">
                  @error('first_name')
                      <span class="invalid-feedback" role="alert">
                          <strong style="font-size: 12px;">{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="col mb-3">
                  <input id="last_name" type="text" class="form-control form-control-user @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last Name">
                  @error('last_name')
                      <span class="invalid-feedback" role="alert">
                          <strong style="font-size: 12px;">{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="col">
                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong style="font-size: 12px;">{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <div class="col mb-3">
                <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong style="font-size: 12px;">{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="col mb-3">
                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
              </div>
            </div> 
            <button type="submit" class="btn btn-primary btn-user btn-block">
              {{ __('Register') }}
            </button>
              <center style="margin: 15px">
                <div>
                  {!! NoCaptcha::renderJs('en', false, 'onloadCallback') !!}
                  {!! NoCaptcha::display() !!}            
                </div>
              </center>
              @error('g-recaptcha-response')
                <span style="font-size: 13px;" class="text-danger" role="alert">
                  <center>
                    <strong>Check this field.</strong>
                  </center>
                </span>
              @enderror
              @if (session('registration_success'))
                <div class="alert alert-success" role="alert">
                  {{ session('registration_success') }}
                </div>
              @endif
          </form>
          <div class="text-center">
            <a class="small" href="/password/reset">Forgot password?</a>
          </div>
          <div class="text-center">
            <a class="small" href="{{route('login')}}">Already have an account? Log In!</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"   integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"   crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"   integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"   crossorigin="anonymous"></script>

</body>

</html>

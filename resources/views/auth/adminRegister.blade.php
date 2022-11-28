<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Earport Admin - Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="{{('earport_64px.ico')}}">
</head>

<body class="bg-gradient-primary">

  <div class="container">
    
   <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 ">
              <div class="col md-7"></div>
              <img src="{{ ('earport fix.png') }}" class="img-responsive" style=" position:center; padding-top: 100px; padding-left: 100px; padding-right: 100px; padding-bottom: 100px; height:93%; width:100%;">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Earport Admin Register Page</h1>
              </div>
              
              <form class="user" method="POST" action="{{ route('register') }}">
                @csrf
                
                <div class="form-group">
                    <input type="text" class="form-control form-control-user {{ $errors->has('name') ? ' is-invalid' : '' }}" id="Name" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control form-control-user {{ $errors->has('username') ? ' is-invalid' : '' }}" id="Username" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                  </div>

                <div class="form-group">
                  <input type="email" class="form-control form-control-user {{ $errors->has('email') ? ' is-invalid' : '' }}" id="Email" placeholder="Email Address" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif  
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user {{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword" placeholder="Password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="PasswordConfirmation"  placeholder="Repeat Password" name="password_confirmation" required>
                  </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control form-control-user {{ $errors->has('role') ? ' is-invalid' : '' }}" id="Role" placeholder="Role" name="role" value="{{ old('role') }}" required autofocus>
                        @if ($errors->has('role'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button> 
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{('admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>

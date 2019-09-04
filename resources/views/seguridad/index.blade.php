
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Storeblog| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset ("assets/$theme/dist/css/adminlte.min.css")}}">
  <link rel="stylesheet" href="{{asset ("assets/$theme/dist/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset ("assets/css/custom.css")}}">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box form-group">
  <div class="login-logo">
    <a href="{{route('inicio')}}"><b>Storeblog </b>QEM</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar sesion</p>
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif

    <form action="{{route('login_post')}}" method="POST">
        @csrf
      <div class="form-group has-feedback">
      <input type="text" name="usuario" autocomplete="off" class="form-control" value="{{old('usuario')}}" placeholder="User name">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="♦♦♦♦♦♦♦♦♦♦">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


    <!-- /.social-auth-links -->

  
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->

<!-- jQuery -->
<script src="{{asset ("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- FastClick -->
<script src="{{asset ("assets/$theme/plugins/fastclick/fastclick.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset ("assets/$theme/dist/js/demo.js")}}"></script>

</body>
</html>

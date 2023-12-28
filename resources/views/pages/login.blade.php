<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Re Fitness Gym Pasuruan | Log in</title>
    <link rel="shortcut icon" type="image" href="{{ asset('assets/img/logo.png') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ 'assets/plugins/fontawesome-free/css/all.min.css' }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ 'assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css' }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ 'assets/dist/css/adminlte.min.css' }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Re Fitness Gym | </b>Login</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Masukkan Username dan Password</p>
                @if (session('login'))
                    <div class="alert alert-success" role="alert">
                        {{ session('login') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ 'assets/plugins/jquery/jquery.min.js' }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ 'assets/plugins/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ 'assets/dist/js/adminlte.min.js' }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form | Seleksi Pelatihan Masyarakat PPSDM Migas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
    <link rel="shortcut icon" href="images/logo_2.png">

</head>

<body class="hold-transition login-page " style="background-image: url('images/ppsdm.jpeg'); background-size:cover;">
    <div class="login-box mr-5 ">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary ">
            <div class="card-header text-center">
                <img src="images/logo.png" alt="" width="250">
                <div class="PPSDM text-center">
                    <b style="color: rgb(255, 217, 0)">PPSDM MIGAS CEPU</b>
                </div>
            </div>

            <div class="card-body">
                <p class="login-box-msg">SISTEM INFORMASI SELEKSI PELATIHAN MASYARAKAT PPSDM MIGAS</p>

                <form action="/loginprocess" method="post">
                    {{-- @method('get') --}}
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Username" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user-circle"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}

                        </div>
                    @endif

                    <div class="row">
                        <div class="col-8">
                            {{-- <div class="icheck-primary"> --}}
                            {{-- <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label> --}}
                            {{-- <p class="mb-0">
                                    <a href="/register" class="text-center">Registration</a>
                                </p> --}}
                            {{-- </div> --}}
                        </div>
                        <!-- /.col -->
                        {{-- <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div> --}}
                        <!-- /.col -->
                    </div>

                    <div class="social-auth-links text-center mt-2 mb-3">
                        <button type="submit" class="btn btn-block btn-primary ">Sign In</button>
                        <a href="/">Kembali ke Beranda</a>
                        <p>Halaman ini hanya dapat digunakan oleh administrator</p>
                    </div>
                </form>



            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
</body>


</html>

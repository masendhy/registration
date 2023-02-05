<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Create User | Seleksi Pelatihan Masyarakat PPSDM Migas</title>

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

<body class="hold-transition sidebar-mini" style="background-image: url('images/back.jpg');background-size:cover; ">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- left column -->

            <div class="col-md-6 ">
                <div class="card-header text-center">
                    <img src="images/logo.png" alt="" width="250">
                    <div class="PPSDM text-center">
                        <h2 style="color: rgb(59, 59, 59)">PPSDM MIGAS CEPU</h2>
                    </div>
                </div>
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">TAMBAH DATA ADMIN</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/usercreate" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('POST') --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Nama lengkap" autofocus value="{{ old('name') }}">

                                @error('name')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="text"
                                    class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Email" autofocus value="{{ old('email') }}">

                                @error('email')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Password" autofocus value="{{ old('password') }}">

                                @error('password')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary success">Submit</button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>

    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->

    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<script>
    $('.success').click(function() {
        swal("Selamat!", "Anda berhasil mendaftar", "success");
    })
</script>

</html>

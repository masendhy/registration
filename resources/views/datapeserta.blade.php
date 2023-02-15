<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Daftar Peserta | Seleksi Pelatihan Masyarakat PPSDM Migas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="images/logo_2.png">
</head>

<body class="hold-transition sidebar-mini">

    <div class="">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="">
                            <h3 class=""><img src="images/logo.png" alt="" width="150">Data Peserta
                                Pelatihan</h3>

                        </div>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="/logout" class="btn btn-light mt-4"><i
                                    class="fa-sharp fa-solid fa-right-from-bracket"></i>
                                Logout</a>
                        </ol>
                    </div><!-- /.col -->


                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container ">

        </div>
        <div class="container ">

        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah peserta</span>
                            <span class="info-box-number">{{ $jumlahpeserta }}
                                <small>Orang</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box ">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-male"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Peserta Pria</span>
                            <span class="info-box-number">{{ $jumlahpesertapria }} <small>Orang</small></span>


                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>


                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box ">
                        <span class="info-box-icon bg-warning elevation-1"><i style="color:#fff"
                                class="fas fa-female"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Peserta Wanita</span>
                            <span class="info-box-number">{{ $jumlahpesertawanita }} <small>Orang</small></span>


                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>

        </div>
        <div class="container  mt-4">
            <div class="row g-3 align-items-center">
                <form action="/peserta" method="get">
                    <div class="col-auto">
                        <input type="search" name="search" id="inputPassword6" class="form-control"
                            aria-describedby="passwordHelpInline" placeholder="search">
                    </div>
                </form>

                <div class="col-auto">
                    <a href="/exportpdf" class="btn btn-danger">Export PDF</a>
                </div>
                <div class="col-auto">
                    <a href="/exportexcel" class="btn btn-success" target="_blank">Export Excel</a>
                </div>
            </div>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No. KTP</th>
                        <th scope="col">KTP</th>
                        <th scope="col">Surat Keterangan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Alamat Rumah</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kabupaten / Kota</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Ijazah</th>
                        <th scope="col">No. HP</th>
                        <th scope="col">Foto</th>
                        <th scope="col">SIM</th>
                        <th scope="col">Pelatihan</th>
                        <th scope="col">Periode</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->nik }}</td>
                            {{-- <td>{{ $row->img_nik }}</td> --}}
                            <td><img src="{{ asset('KTP/' . $row->img_nik) }}" style="width: 50px"></td>
                            <td>
                                @php
                                    $image = public_path('SUKET/' . $row->img_suket);
                                    $imageData = base64_encode(file_get_contents($image));
                                    $src = 'data:' . mime_content_type($image) . ';base64,' . $imageData;
                                @endphp
                                <img src="{{ $src }}" style="width: 150px">
                            </td>
                            <td>{{ $row->jenis_kelamin }}</td>
                            <td>{{ $row->status }}</td>
                            <td>{{ $row->tempat_lahir }}</td>
                            <td>{{ $row->tanggal_lahir }}</td>
                            <td>{{ $row->agama }}</td>
                            <td>{{ $row->alamat_rumah }}</td>
                            <td>{{ $row->provincies->name }}</td>
                            <td>{{ $row->regencies->name }}</td>
                            <td>{{ $row->pendidikan }}</td>
                            <td><img src="{{ asset('IJAZAH/' . $row->img_ijazah) }}" style="width: 50px"></td>
                            <td>{{ $row->no_hp }}</td>
                            {{-- <td>{{ $row->foto }}</td> --}}
                            <td><img src="{{ asset('FOTO/' . $row->foto) }}" style="width: 50px"></td>
                            {{-- <td>{{ $row->sim }}</td> --}}
                            <td><img src="{{ asset('SIM/' . $row->sim) }}" style="width: 50px"></td>
                            <td>{{ $row->pelatihans->pelatihan }}</td>
                            <td>{{ $row->periodes->name }}</td>


                        </tr>
                    @endforeach

                </tbody>

            </table>
            {{ $data->links() }}
        </div>
        <!-- /.card-body -->
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

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>


</body>


</html>

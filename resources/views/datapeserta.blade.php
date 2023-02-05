<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="shortcut icon" href="images/logo_2.png">
</head>

<body class="hold-transition sidebar-mini">

    <div class="">
        <div class="card-header">
            <h3 class="">Data Peserta Pelatihan</h3>
        </div>

        <div class="col-auto">
            <a href="/export_excel" class="btn btn-success">Export Excel</a>
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NO. KTP</th>
                        <th scope="col">KTP</th>
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
                    @foreach ($data as $index =>$row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->nik }}</td>
                            {{-- <td>{{ $row->img_nik }}</td> --}}
                            <td><img src="{{ asset('KTP/' . $row->img_nik) }}" style="width: 50px"></td>
                            <td>{{ $row->jenis_kelamin }}</td>
                            <td>{{ $row->status }}</td>
                            <td>{{ $row->tempat_lahir }}</td>
                            <td>{{ $row->tanggal_lahir }}</td>
                            <td>{{ $row->agama }}</td>
                            <td>{{ $row->alamat_rumah }}</td>
                            <td>{{ $row->provinsi }}</td>
                            <td>{{ $row->kota }}</td>
                            <td>{{ $row->pendidikan }}</td>
                            <td><img src="{{ asset('IJAZAH/' . $row->img_ijazah) }}" style="width: 50px"></td>
                            <td>{{ $row->no_hp }}</td>
                            {{-- <td>{{ $row->foto }}</td> --}}
                            <td><img src="{{ asset('FOTO/' . $row->foto) }}" style="width: 50px"></td>
                            {{-- <td>{{ $row->sim }}</td> --}}
                            <td><img src="{{ asset('SIM/' . $row->sim) }}" style="width: 50px"></td>
                            <td>{{ $row->pelatihan }}</td>
                            <td>{{ $row->periode }}</td>

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


</body>


</html>

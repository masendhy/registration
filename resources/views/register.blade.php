<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Form Registrasi | Seleksi Pelatihan Masyarakat PPSDM Migas</title>

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
                        <h3 class="card-title">DATA PENDAFTAR PELATIHAN MASYARAKAT</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/registeruser" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('POST') --}}
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama" type="text"
                                    class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Nama lengkap" autofocus value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nomor nik">NIK</label>
                                <input name="nik" type="text"
                                    class="form-control @error('nik') is-invalid @enderror " id="exampleInputEmail1"
                                    placeholder="Nomor NIK" autofocus value="{{ old('nik') }}">
                                @error('nik')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group ">
                                <label for="exampleSelectBorder">Jenis Kelamin
                                </label>
                                <select name="jenis_kelamin" value="{{ old('jenis_kelamin') }}"
                                    class="custom-select form-control  @error('jenis_kelamin') is-invalid @enderror "
                                    id="exampleSelectBorder">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorder">Status
                                </label>
                                <select name="status"
                                    class="custom-select form-control  @error('status') is-invalid @enderror"
                                    id="exampleSelectBorder">
                                    <option>Pilih Status</option>
                                    <option value="Lajang">Lajang</option>
                                    <option value="Menikah">Menikah</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nomor ijazah">Tempat Lahir</label>
                                <input name="tempat_lahir" type="text" value="{{ old('tempat_lahir') }}"
                                    class="form-control @error('tempat_lahir') is-invalid @enderror ">
                                @error('tempat_lahir')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nomor ijazah">Tanggal Lahir</label>
                                <input name="tanggal_lahir" type="date"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                @error('tanggal_lahir')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nomor ijazah">Agama</label>
                                <input name="agama" type="text" value="{{ old('agama') }}"
                                    class="form-control @error('agama') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="">
                                @error('agama')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="nomor ijazah">Alamat Rumah</label>
                                <input name="alamat_rumah" type="text" value="{{ old('agama') }}"
                                    class="form-control @error('alamat_rumah') is-invalid @enderror">
                                @error('alamat_rumah')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorder">Provinsi
                                </label>
                                <select name="provinsi"
                                    class="custom-select form-control  @error('provinsi') is-invalid @enderror"
                                    id="provinsi">
                                    <option>Pilih Provinsi</option>
                                    @foreach ($provinces as $provinsi)
                                        <option value="{{ $provinsi->id }}"> {{ $provinsi->name }} </option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorder">Kabupaten / Kota
                                </label>
                                <select name="kota"
                                    class="custom-select form-control  @error('kota') is-invalid @enderror"
                                    id="kota">
                                    <option>Pilih Kabupaten / Kota</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nomor ijazah">Pendidikan</label>
                                <input name="pendidikan" type="text" value="{{ old('pendidikan') }}"
                                    class="form-control @error('pendidikan') is-invalid @enderror"
                                    id="exampleInputEmail1" placeholder="">
                                @error('pendidikan')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor HP dan WA</label>
                                <input name="no_hp" type="text" value="{{ old('no_hp') }}"
                                    class="form-control @error('no_hp') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="0123456789">
                                @error('no_hp')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorder">Judul Pelatihan Masyarakat
                                </label>
                                <select name="pelatihan"
                                    class="custom-select form-control  @error('pelatihan') is-invalid @enderror"
                                    id="pelatihan">
                                    <option>Pilih Judul Pelatihan Masyarakat </option>
                                    @foreach ($pelatihans as $pelatihan)
                                        <option value="{{ $pelatihan->id }}">{{ $pelatihan->pelatihan }}</option>
                                    @endforeach

                                </select>
                                <br>
                                * Download Jadwal Lengkap Pelatihan <a href="images/suket.png" style="color:red"
                                    download>
                                    disini
                                </a>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorder">Periode Pelatihan dan Sertifikasi
                                </label>
                                <select name="periode"
                                    class="custom-select form-control  @error('periode') is-invalid @enderror"
                                    id="periode">
                                    <option>Pilih Periode Pelatihan dan Sertifikasi </option>
                                    {{-- @foreach ($periodes as $periode)
                                        <option>{{ $periode->periode }}</option>
                                    @endforeach --}}

                                </select>
                            </div>

                            <div class="">
                                <label for="" class="form-label">Upload KTP</label>
                                <input type="file" name="img_nik"
                                    class="form-control @error('img_nik') is-invalid @enderror"
                                    id="exampleInputFile">
                                @error('img_nik')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                                <br>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Upload SIM A
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="sim" class="form-control  "
                                            id="exampleInputFile">
                                    </div>
                                </div>

                                *Wajib Bagi peserta yang memilih pelatihan <b> Operator Pesawat Angkat, Angkut dan Juru
                                    Ikat Beban
                                    Unit Forklift</b>.
                            </div>

                            <div class="">
                                <label for="" class="form-label">Upload Surat Keterangan Tidak Mampu</label>
                                <input type="file" name="img_suket" class="form-control " id="exampleInputFile">
                                *Tidak Wajib
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Upload Ijazah</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="img_ijazah"
                                            class="form-control @error('img_ijazah') is-invalid @enderror"
                                            id="exampleInputFile">
                                    </div>
                                </div>
                                @error('img_ijazah')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Upload Pas Foto
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="foto"
                                            class="form-control @error('foto') is-invalid @enderror"
                                            id="exampleInputFile">
                                    </div>
                                </div>
                                <p>* Background biru, berdasi, kemeja putih</p>
                                @error('foto')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <p>Saya menyatakan bahwa data yang diisi sudah sesuai dan siap menerima sanksi sesuai hukum
                                yang berlaku apabila data yang diisikan tidak benar.</p>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Saya Setuju</label>
                            </div>
                        </div>

                        <!-- /.card-body -->
                        <div class="card" style="background-color:#F5F5F5">
                            <div class="card-header">
                                <h3 class="card-title"><strong>Keuntungan yang akan didapat peserta</strong></h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                </div>
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li>Bahan ajar pelatihan</li>
                                    <li>Akomodasi dan konsumsi</li>
                                    <li>Uang saku harian sebesar Rp.110.000 per hari selama berada di tempat pelatihan.
                                    </li>
                                    <li>Transportasi perjalanan ( Untuk peserta dari Jawa akan diantar jemput atau
                                        penyelenggara kondisikan naik transportasi umum), jika selama perjalanan ke
                                        tempat penyelenggaraan memerlukan akomodasi transit, tidak menjadi tanggungan
                                        PPSDM Migas. </li>
                                    <li>Pelayanan pengobatan sakit ringan yang tidak memerlukan rawat inap, menggunakan
                                        fasilitas kesehatan pada PPSDM Migas.</li>
                                    <li>Pinjam pakai perlengkapan keselamatan kerja / Alat Pelindung Diri (APD) pada
                                        saat praktik.</li>
                                </ul>
                            </div>
                            <!-- /.card-body -->

                        </div>



                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary ok">Submit</button>
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
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $(function() {
            $('#provinsi').on('change', function() {
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getkota') }}',
                    data: {
                        id_provinsi: id_provinsi
                    },
                    chace: false,

                    success: function(msg) {
                        $('#kota').html(msg);
                    },
                    error: function(data) {

                    }
                })
            })
        })
    </script>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $(function() {
            $('#pelatihan').on('change', function() {
                let id_pelatihan = $('#pelatihan').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getperiode') }}',
                    data: {
                        id_pelatihan: id_pelatihan
                    },
                    chace: false,

                    success: function(msg) {
                        $('#periode').html(msg);
                    },
                    error: function(data) {
                        console.log('error:', data);
                    }
                })
            })
        })
    </script>

</body>
<script>
    $('.success').click(function() {
        swal("Selamat!", "Anda berhasil mendaftar", "ok");
    })
</script>

</html>

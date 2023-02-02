<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | General Form Elements</title>

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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- left column -->

            <div class="col-md-6 ">
                <div class="card-header text-center">
                    <img src="images/logo.png" alt="" width="250">
                    <div class="PPSDM text-center">
                        <b style="color: rgb(255, 217, 0)">PPSDM MIGAS CEPU</b>
                    </div>
                </div>
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">DATA PENDAFTAR PELATIHAN MASYARAKAT</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/registeruser" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Nama lengkap">
                            </div>
                            <div class="form-group">
                                <label for="nomor nik">NIK</label>
                                <input name="nik" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Nomor NIK">
                            </div>

                            <div class="">
                                <label for="" class="form-label">Upload KTP</label>
                                <input type="file" name="img_nik" class="form-control" id="exampleInputFile">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectBorder">Jenis Kelamin
                                </label>
                                <select name="jenis_kelamin" class="custom-select form-control-border"
                                    id="exampleSelectBorder">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nomor ijazah">Ijazah Terakhir</label>
                                <input name="ijazah" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Nomor Ijazah">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Ijazah</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="img_ijazah" class="form-control"
                                            id="exampleInputFile">

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor HP dan WA</label>
                                <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="0123456789">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Asal Provinsi</label>
                                <input name="provinsi" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Provinsi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Asal Kota / Kabupaten</label>
                                <input name="kota" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Kota / Kabupaten">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Surat Keterangan Sehat, Tidak Buta Warna,
                                    Dan Bebas Narkotika
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="surat_sehat" class="form-control"
                                            id="exampleInputFile">

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Kartu BPJS
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="bpjs" class="form-control"
                                            id="exampleInputFile">

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Formulir Pendaftaran
                                </label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Download Formulir Pendaftaran</span>
                                    </div>
                                </div>
                                <label for="exampleInputFile">Upload Formulir Pendaftaran
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="form_daftar" class="form-control"
                                            id="exampleInputFile">

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Surat Pernyataan
                                </label>
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Download Surat Pernyataan</span>
                                    </div>
                                </div>
                                <label for="exampleInputFile">Upload Surat Pernyataan
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="surat_pernyataan" class="form-control"
                                            id="exampleInputFile">

                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload Pas Foto
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="form-control"
                                            id="exampleInputFile">

                                    </div>

                                </div>
                                <p>* Background biru, berdasi, kemeja putih</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Upload SIM A
                                </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="sim" class="form-control"
                                            id="exampleInputFile">

                                    </div>


                                </div>
                                <p>* Bagi peserta yang memilih pelatihan Operator
                                    Pesawat Angkat, Angkut dan Juru Ikat Beban
                                    Unit Forklift</p>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectBorder">Judul Pelatihan Masyarakat
                                </label>
                                <select class="custom-select form-control-border" id="exampleSelectBorder">
                                    <option selected>Pilih Judul Pelatihan Masyarakat </option>
                                    <option value="PERATOR PESAWAT ANGKAT. ANGKUT DAN JURU IKAT BEBAN UNIT RIGGER">
                                        OPERATOR PESAWAT ANGKAT. ANGKUT DAN JURU IKAT BEBAN UNIT RIGGER</option>
                                    <option value="OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT FORKLIFT">
                                        OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT FORKLIFT</option>
                                    <option value="OPERATOR KESELAMATAN DAN KESEHATAN KERJA MINYAK DAN GAS BUMI">
                                        OPERATOR KESELAMATAN DAN KESEHATAN KERJA MINYAK DAN GAS BUMI</option>
                                    <option value="OPERATOR SCAFOLDING">OPERATOR SCAFOLDING</option>
                                    <option value="TEKNISI INSTRUMENTASI LEVEL - 1">TEKNISI INSTRUMENTASI LEVEL - 1
                                    </option>
                                    <option value="JURU LAS (WELDER)">JURU LAS (WELDER)</option>
                                    <option value="OPERATOR LANTAI PERAWATAN SUMUR<">OPERATOR LANTAI PERAWATAN SUMUR
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectBorder">Periode Pelatihan dan Sertifikasi
                                </label>
                                <select class="custom-select form-control-border" id="exampleSelectBorder">
                                    <option selected>Pilih Periode Pelatihan dan Sertifikasi </option>
                                    <option value="06 - 24 MARET 2023">06 - 24 MARET 2023</option>
                                    <option value="08 - 26 MEI 2023">08 - 26 MEI 2023</option>
                                </select>
                            </div>

                            <p>Saya menvatakan bahwa data yang diisi sudah sesuai dan siap menerima sanksi sesuai hukum
                                yang berlaku apabila data yang diisikan tidak benar.</p>





                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Saya Setuju</label>
                            </div>
                        </div>
                        <!-- /.card-body -->

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
        swal("Selamat!", "Anda berhasil mendaftar", "warning");
    })
</script>

</html>

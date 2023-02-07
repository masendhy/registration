<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                                    id="exampleSelectBorder">
                                    <option>Pilih Provinsi</option>
                                    <option value="Aceh">Aceh</option>
                                    <option value='Sumatera Utara'>Sumatera Utara</option>
                                    <option value="Riau">Riau</option>
                                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Lampung">Lampung</option>
                                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                    <option value="Maluku">Maluku</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Papua Barat">Papua Barat</option>
                                    <option value="NTT">NTT</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorder">Kabupaten / Kota
                                </label>
                                <select name="kota"
                                    class="custom-select form-control  @error('kota') is-invalid @enderror"
                                    id="exampleSelectBorder">
                                    <option>Pilih Kabupaten / Kota</option>
                                    <option value="Provinsi Aceh" disabled>Provinsi Aceh</option>
                                    <option value="Aceh Tamlang">Aceh Tamlang</option>
                                    <option value='Aceh Utara'>Aceh Utara</option>
                                    <option value="Aceh Timur">Aceh Timur</option>
                                    <option value="Provinsi Sumatera Utara" disabled>Provinsi Sumatera Utara</option>
                                    <option value="Langkat">Langkat</option>
                                    <option value="Deli Serdang">Deli Serdang</option>
                                    <option value="Provinsi Riau" disabled>Provinsi Riau</option>
                                    <option value="Bengkalis">Bengkalis</option>
                                    <option value="Rokan Hilir">Rokan Hilir</option>
                                    <option value="Siak">Siak</option>
                                    <option value="Kepulauan Meranti">Kepulauan Meranti</option>
                                    <option value="Dumai">Dumai</option>
                                    <option value="Kampar">Kampar</option>
                                    <option value="Indra Giri Hulu">Indra Giri Hulu</option>
                                    <option value="Rokan Hulu">Rokan Hulu</option>
                                    <option value="Pelawan">Pelawan</option>
                                    <option value="Kepulauan Riau" disabled>Kepulauan Riau</option>
                                    <option value="Natuna">Natuna</option>
                                    <option value="Kepulauan Anambas">Kepulauan Anambas</option>
                                    <option value="Provinsi Jambi" disabled>Provinsi Jambi</option>
                                    <option value="Batanghari">Batanghari</option>
                                    <option value="Tanjung Jabung Barat">Tanjung Jabung Barat</option>
                                    <option value="Tanjung Jabung Timur">Tanjung Jabung Timur</option>
                                    <option value="Muaro Jambi">Muaro Jambi</option>
                                    <option value="Sarolangun">Sarolangun</option>
                                    <option value="Kota Jambi">Kota Jambi</option>
                                    <option value="Tebo">Tebo</option>
                                    <option value="Provinsi Lampung" disabled>Provinsi Lampung</option>
                                    <option value="Lampung Timur">Lampung Timur</option>
                                    <option value="Provinsi Sumatera Selatan" disabled>Provinsi Sumatera Selatan
                                    </option>
                                    <option value="Musi Rawas Utara">Musi Rawas Utara</option>
                                    <option value="Banyuasin">Banyuasin</option>
                                    <option value="Musi Banyuasin">Musi Banyuasin</option>
                                    <option value="Musi Rawas">Musi Rawas</option>
                                    <option value="Ogan Ilir">Ogan Ilir</option>
                                    <option value="Muara Enim">Muara Enim</option>
                                    <option value="Ogan Komering Ulu">Ogan Komering Ulu</option>
                                    <option value="Lahat">Lahat</option>
                                    <option value="Prabumulih">Prabumulih</option>
                                    <option value="Penukal Abab Lematang Ilir">Penukal Abab Lematang Ilir</option>
                                    <option value="Provinsi Jawa Barat" disabled>Provinsi Jawa Barat</option>
                                    <option value="Indramayu">Indramayu</option>
                                    <option value="Karawang">Karawang</option>
                                    <option value="Bekasi">Bekasi</option>
                                    <option value="Subang">Subang</option>
                                    <option value="Majalengka">Majalengka</option>
                                    <option value="Provinsi Jawa Tengah" disabled>Provinsi Jawa Tengah</option>
                                    <option value="Blora">Blora</option>
                                    <option value="Rembang">Rembang</option>
                                    <option value="Cilacap">Cilacap</option>
                                    <option value="Provinsi Jawa Timur" disabled>Provinsi Jawa Timur</option>
                                    <option value="Sidoarjo">Sidoarjo</option>
                                    <option value="Gresik">Gresik</option>
                                    <option value="Bojonegoro">Bojonegoro</option>
                                    <option value="Tuban">Tuban</option>
                                    <option value="Bangkalan">Bangkalan</option>
                                    <option value="Sumenep">Sumenep</option>
                                    <option value="Provinsi Kalimantan Selatan" disabled>Provinsi Kalimantan Selatan
                                    </option>
                                    <option value="Tabalong">Tabalong</option>
                                    <option value="Provinsi Kalimantan Tengah" disabled>Provinsi Kalimantan Tengah
                                    </option>
                                    <option value="Barito Utara">Barito Utara</option>
                                    <option value="Provinsi Kalimantan Timur" disabled>Provinsi Kalimantan Timur
                                    </option>
                                    <option value="Penajam Paser Utara">Penajam Paser Utara</option>
                                    <option value="Kutai Timur">Kutai Timur</option>
                                    <option value="Bontang">Bontang</option>
                                    <option value="Samarinda">Samarinda</option>
                                    <option value="Kutai Kertanegara">Kutai Kertanegara</option>
                                    <option value="Balikpapan">Balikpapan</option>
                                    <option value="Provinsi Kalimantan Utara" disabled>Provinsi Kalimantan Utara
                                    </option>
                                    <option value="Bulungan">Bulungan</option>
                                    <option value="Nunukan">Nunukan</option>
                                    <option value="Tarakan">Tarakan</option>
                                    <option value="Provinsi Sulawesi Selatan" disabled>Provinsi Sulawesi Selatan
                                    </option>
                                    <option value="Wajo">Wajo</option>
                                    <option value="Provinsi Sulawesi Tengah" disabled>Provinsi Sulawesi Tengah</option>
                                    <option value="Banggai">Banggai</option>
                                    <option value="Provinsi Maluku" disabled>Provinsi Maluku</option>
                                    <option value="Seram Bagian Timur">Seram Bagian Timur</option>
                                    <option value="Seram Bagian Barat">Seram Bagian Barat</option>
                                    <option value="Provinsi Papua" disabled>Provinsi Papua</option>
                                    <option value="Jayawijaya">Jayawijaya</option>
                                    <option value="Nabire">Nabire</option>
                                    <option value="Provinsi Papua Barat" disabled>Provinsi Papua Barat</option>
                                    <option value="Teluk Bintuni">Teluk Bintuni</option>
                                    <option value="Sorong">Sorong</option>
                                    <option value="Provinsi NTT" disabled>Provinsi NTT</option>
                                    <option value="Ngada">Ngada</option>
                                    <option value="Kupang">Kupang</option>
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
                                    id="exampleSelectBorder">
                                    <option>Pilih Judul Pelatihan Masyarakat </option>
                                    <option value="OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT RIGGER">
                                        OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT RIGGER</option>
                                    <option value="OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT FORKLIFT">
                                        OPERATOR PESAWAT ANGKAT, ANGKUT DAN JURU IKAT BEBAN UNIT FORKLIFT</option>
                                    <option value="OPERATOR KESELAMATAN DAN KESEHATAN KERJA MINYAK DAN GAS BUMI">
                                        OPERATOR KESELAMATAN DAN KESEHATAN KERJA MINYAK DAN GAS BUMI</option>
                                    <option value="OPERATOR SCAFOLDING">OPERATOR SCAFOLDING</option>
                                    <option value="TEKNISI INSTRUMENTASI LEVEL - 1">TEKNISI INSTRUMENTASI LEVEL - 1
                                    </option>
                                    <option value="OPERATOR LANTAI PERAWATAN SUMUR">OPERATOR LANTAI PERAWATAN SUMUR
                                    </option>
                                    <option value="JURU LAS (WELDER)">JURU LAS (WELDER)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelectBorder">Periode Pelatihan dan Sertifikasi
                                </label>
                                <select name="periode"
                                    class="custom-select form-control  @error('periode') is-invalid @enderror"
                                    id="exampleSelectBorder">
                                    <option>Pilih Periode Pelatihan dan Sertifikasi </option>
                                    <option value="06 - 24 MARET 2023">06 - 24 MARET 2023</option>
                                    <option value="08 - 26 MEI 2023">08 - 26 MEI 2023</option>
                                    {{-- <option value="08 - 26 MEI 2023">08 - 26 MEI 2023</option> --}}
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
                                        <input type="file" name="sim"
                                            class="form-control @error('sim') is-invalid @enderror "
                                            id="exampleInputFile">
                                    </div>
                                </div>
                                @error('sim')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="">
                                <label for="" class="form-label">Upload Surat Keterangan Tidak Mampu</label>
                                <input type="file" name="img_suket"
                                    class="form-control @error('img_suket') is-invalid @enderror"
                                    id="exampleInputFile">
                                @error('img_suket')
                                    <div class="alert " style="color:tomato">{{ $message }}</div>
                                @enderror
                                <br>
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

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-4">Data Pegawai</h1>
    <div class="container m-3">

        <div class="row ">
            <table class="table text-center ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">NO. KTP</th>
                        <th scope="col">KTP</th>
                        <th scope="col">NO. Ijazah</th>
                        <th scope="col">Ijazah</th>
                        <th scope="col">No_HP</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Kota / Kabupaten</th>
                        <th scope="col">Surat Sehat</th>
                        <th scope="col">BPJS</th>
                        <th scope="col">Form Daftar</th>
                        <th scope="col">Surat Pernyataan</th>
                        <th scope="col">Pas Foto</th>
                        <th scope="col">SIM</th>
                        <th scope="col">Pelatihan</th>
                        <th scope="col">Periode</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->jenis_kelamin }}</td>
                            <td>{{ $row->nik }}</td>
                            {{-- <td>{{ $row->img_nik }}</td> --}}
                            <td><img src="{{ asset('KTP/' . $row->img_nik) }}" style="width: 50px"></td>
                            <td>{{ $row->jenis_kelamin }}</td>
                            <td>{{ $row->ijazah }}</td>
                            {{-- <td>{{ $row->img_ijazah }}</td> --}}
                            <td><img src="{{ asset('IJAZAH/' . $row->img_ijazah) }}" style="width: 50px"></td>

                            <td>{{ $row->no_hp }}</td>
                            <td>{{ $row->provinsi }}</td>
                            <td>{{ $row->kota }}</td>
                            {{-- <td>{{ $row->surat_sehat }}</td> --}}
                            <td><img src="{{ asset('SEHAT/' . $row->surat_sehat) }}" style="width: 50px"></td>

                            {{-- <td>{{ $row->bpjs }}</td> --}}
                            <td><img src="{{ asset('BPJS/' . $row->bpjs) }}" style="width: 50px"></td>

                            {{-- <td>{{ $row->form_daftar }}</td> --}}
                            <td><img src="{{ asset('DAFTAR/' . $row->form_daftar) }}" style="width: 50px"></td>

                            {{-- <td>{{ $row->surat_pernyataan }}</td> --}}
                            <td><img src="{{ asset('PERNYATAAN/' . $row->surat_pernyataan) }}" style="width: 50px">
                            </td>

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
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>

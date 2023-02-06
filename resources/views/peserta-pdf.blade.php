<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ff5656;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Data Peserta Latihan</h1>

    <table id="customers">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">KTP</th>
            <th scope="col">Ijazah</th>
            <th scope="col">Foto</th>
            <th scope="col">SIM</th>
        </tr>
        @foreach ($data as $index => $row)
            <tr>
                <td scope="row">{{ $row->id }}</td>
                <td>{{ $row->nama }}</td>
                <td><img src="{{ public_path('KTP/' . $row->img_nik) }}" style="width: 50px"></td>
                <td><img src="{{ public_path('IJAZAH/' . $row->img_ijazah) }}" style="width: 50px"></td>
                <td><img src="{{ public_path('SIM/' . $row->sim) }}" style="width: 50px"></td>
                <td><img src="{{ public_path('FOTO/' . $row->foto) }}" style="width: 50px"></td>

            </tr>
        @endforeach

    </table>

</body>

</html>

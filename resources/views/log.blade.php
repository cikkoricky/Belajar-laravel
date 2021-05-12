<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:darkcyan">
    <div class="container">
        <h1 align="center">Data Siswa Baru</h1>
        <a href="/siswa">
            <button class="btn btn-info">Tambah Data Siswa</button>
        </a>
        <br>
        <table style="background-color: darkgrey" class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>J.kel</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
                $nomer=1;
            ?>
            @foreach ($datasiswa as $isi )
            <tr>
                <td>{{$nomer++}}</td>
                <td>{{$isi->nis}}</td>
                <td>{{$isi->nama}}</td>
                <td>{{$isi->kel}}</td>
                <td>{{$isi->kelas}}</td>
                <td>{{$isi->alamat}}</td>
                <td>
                    <a href="/edit/{{$isi->nis}}">
                        <button class="btn btn-warning" title="edit data  : {{$isi->nis}}">Edit</button>
                    </a>
                    <a href="/hapus/{{$isi->nis}}">
                        <button class="btn btn-danger" title="hapus data  : {{$isi->nis}}">Hapus</button>
                    </a>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</body>
</html>

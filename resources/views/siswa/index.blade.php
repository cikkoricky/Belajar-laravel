<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Data Siswa</h3>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <td>No</td>
                <td>NIS</td>
                <td>Nama</td>
                <td>J.kel</td>
                <td>Kelas</td>
                <td>Alamat</td>
            </tr>
            <?php
            $nomer=1;
        ?>
        @foreach ($databarang as $isi)

        <tr>
            <td>{{$nomer++}}</td>
            <td>{{$isi->nis}}</td>
            <td>{{$isi->nama}}</td>
            <td>{{$isi->kel}}</td>
            <td>{{$isi->kelas}}</td>
            <td>{{$isi->alamat}}</td>
            <td>
                <a href="/kendali/edit/{{$isi->nis}}">
                    <button class="btn btn-warning" title="edit data  : {{$isi->nis}}">Edit</button>
                </a>
                <a href="/kendali/hapus/{{$isi->id}}">
                    <button class="btn btn-danger" title="hapus data  : {{$isi->nis}}">Hapus</button>
                </a>
            </td>
        </tr>
        $endforeach
        </table>
    </div>
</body>
</html>

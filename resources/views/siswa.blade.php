<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: darkcyan">
    <div class="container">
        <table class="table table-bordered">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div  class="modal-header bg-primary" >
                        <h2>Kolom Pendaftaran</h2>
                    </div>
                    <div  class="modal-body ">
                        <form action="/simpan">
                            <div class="form-group">
                                NIS :
                                <input type="text" name="nis" class="form-control">
                            </div>
                            <div class="form-group">
                                Nama :
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                Jenis Kelamin :
                                <select  class="form-control" name="kel">
                                    <option></option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                Kelas :
                                <input type="text" name="kelas" class="form-control">
                            </div>
                            <div class="form-group">
                                Alamat :
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="modal-footer " >
                                <button class="btn btn-info">Simpan</button>
                        </div>
                        </form>
                    </div>

            </div>
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Tambah Data</h2>
                    </div>
                    <div class="modal-body">
                        <form class="index.blade.php">
                            <div class="form-group">
                                NIS :
                                <input type="text" name="nis" class="form-group">
                            </div>
                            <div class="form-group">
                                Nama :
                                <input type="text" name="nama" class="form-group">
                            </div>
                            <div class="form-group">
                                Jenis Kelamin :
                                <select>
                                    <option value="laki-laki">L</option>
                                    <option value="Perempuan">P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                Kelas :
                                <input type="text" name="kelas" class="form-group">
                            </div>
                            <div class="form-group">
                                Alamat :
                                <input type="text" name="alamat" class="form-group">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                </div>
            </div>
        </table>
    </div>
</body>
</html>

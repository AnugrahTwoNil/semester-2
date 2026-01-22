<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rata-Rata</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-5">Forum Tambah Siswa</h5>
                </div>
                <div class="card-body">
                    <div class="menu">
                    <form method="POST" >
                        <div class="mb-3 mt-3">
                        <label for="">Nama :</label>
                        <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                        <label for="">Kelas :</label>
                        <input type="text" class="form-control" name="kelas">
                        </div>
                        <div class="mb-3">
                        <label for="">Jurusan :</label>
                        <input type="text" class="form-control" name="jurusan">
                        </div>
                        <div class="mb-3">
                        <label for="">Alamat :</label>
                        <input type="text" class="form-control" name="alamat">
                        </div>
                        <button type="submit" class="btn btn-info text-white w-100">Tambah</button>
                    </form>
                </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>
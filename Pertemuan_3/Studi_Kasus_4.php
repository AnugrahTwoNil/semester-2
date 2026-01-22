<?php 

$total = 0;

function ambil_input($name) {
    $ambil_all = $_POST[$name] ??"";
    return $ambil_all;
}

function hitung_nilai($nilai1, $nilai2, $nilai3) {
    $total_nilai = $nilai1 + $nilai2 + $nilai3;
    return $total_nilai;
}

function rata_nilai($nilai1, $nilai2, $nilai3) {
    $rata_rata = hitung_nilai($nilai1, $nilai2, $nilai3) / 3;
    return $rata_rata;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total = rata_nilai(ambil_input('nilai1'), ambil_input('nilai2'), ambil_input('nilai3'));
}

?>

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
                    <h5 class="mb-5">Rata-Rata Nilai Ujian Sekolah</h5>
                </div>
                <div class="card-body">
                    <div class="menu">
                        <h5>Masukan Nilai</h5>
                    <form method="POST" >
                        <div class="mb-3 mt-3">
                        <label for="">Nilai 1</label>
                        <input type="number" class="form-control" name="nilai1" value="<?= ambil_input('nilai1') ?>">
                        </div>
                        <div class="mb-3">
                        <label for="">Nilai 2</label>
                        <input type="number" class="form-control" name="nilai2" value="<?= ambil_input('nilai2') ?>">
                        </div>
                        <div class="mb-3">
                        <label for="">Nilai 3</label>
                        <input type="number" class="form-control" name="nilai3" value="<?= ambil_input('nilai3') ?>">
                        </div>
                        <button type="submit" class="btn btn-info text-white w-100">Hitung Rata-Rata</button>
                    </form>
                </div>

                <?php if ($total !== 0): ?>
                <div class="card-footer mt-2">
                    <p class="fs-5">Rata-rata Nilai : <?= $total ?></p>
                </div>
                <?php endif ?>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>
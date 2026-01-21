<?php 

$total_Nilai = 0;
$nilai = 0;
$total = 0;


function ambil_input($name) {
    $ambil_all = $_POST[$name] ??"";
    return $ambil_all;
}

function hitung_nilai($name) {
    $nilai = ambil_input($name);
    if ($nilai >= 75) {
        return "Lulus";
    } elseif ($nilai <= 74) { 
        return "Tidak Lulus";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total_nilai = hitung_nilai('nilai');
    $total = $total_nilai;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-5">Nilai Siswa</h5>
                </div>
                <div class="card-body">
                    <div class="menu">
                        <h5>Nilai</h5>
                        <ol>
                            <li>Di atas 75 = Lulus</li> 
                            <li>Di bawah 75 = Tidak Lulus</li>
                        </ol>
                    <form method="POST" >
                        <div class="mb-3 mt-3">
                        <label for="">Nilai Siswa</label>
                        <input type="number" class="form-control" name="nilai" value="<?= ambil_input('nilai') ?>">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total !== 0): ?>
                <div class="card-footer mt-2">
                    <p class="fs-5">Hasil : <?= $total_nilai ?></p>
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
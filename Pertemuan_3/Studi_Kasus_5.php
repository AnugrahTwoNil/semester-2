<?php 

$total = 0;



function ambil_input($name) {
    $ambil_all = $_POST[$name] ??"";
    return $ambil_all;
}
function ambil_input2($name) {
    $ambil_all = $_POST[$name] ??"";
    return $ambil_all;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total_gaji = ambil_input('pokok') + ambil_input2('tunjangan');
    $total = $total_gaji;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-5">Hitungan Gaji akhir bulan</h5>
                </div>
                <div class="card-body">
                    <div class="menu">
                        <h5>Masukan Gaji</h5>
                    <form method="POST" >
                        <div class="mb-3 mt-3">
                        <label for="">Gaji Pokok</label>
                        <input type="number" class="form-control" name="pokok" value="<?= ambil_input('pokok') ?>">
                        </div>
                        <div class="mb-3">
                        <label for="">Tunjangan</label>
                        <input type="number" class="form-control" name="tunjangan" value="<?= ambil_input('tunjangan') ?>">
                        </div>

                        <button type="submit" class="btn btn-secondary w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total !== 0): ?>
                <div class="card-footer mt-2">
                    <p class="mt-3">Gaji Pokok : Rp <?= number_format(ambil_input('pokok'), 0, ",", ".") ?></p>
                    <p class="mt-3">Tunjangan : Rp <?= number_format(ambil_input('tunjangan'), 0, ",", ".") ?></p>
                    <p class="fs-5">Total Gaji : Rp <?= number_format($total, 0, ",", ".") ?></p>
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
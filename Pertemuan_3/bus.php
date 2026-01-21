<?php 

$total = 0;
$Pelajar = 0;
$Umum = 0;


function ambil_input($name) {
    $ambil_all = $_POST[$name] ??"";
    return $ambil_all;
}

function hitung_harga($jumlah, $harga_satuan) {
    $total_harga = $jumlah * $harga_satuan;
    return $total_harga;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $total_tiket_pelajar = hitung_harga(ambil_input('Pelajar'), 5000);
    $total_tiket_umum = hitung_harga(ambil_input('Umum'), 8000);
    $total = $total_tiket_pelajar + $total_tiket_umum;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Bus</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-warning text-white">
                    <h5 class="mb-5">Tiket Bus (dengan function)</h5>
                </div>
                <div class="card-body">
                    <div class="menu">
                        <h5>Tiket</h5>
                        <ol>
                            <li>Tiket Pelajar - Rp 5.000</li> 
                            <li>Tiket Umum - Rp 8.000</li>
                        </ol>
                    <form method="POST" >
                        <div class="mb-3 mt-3">
                        <label for="">Tiket Pelajar</label>
                        <input type="number" class="form-control" name="Pelajar" value="<?= ambil_input('Pelajar') ?>">
                        </div>
                        <div class="mb-3">
                        <label for="">Tiket Umum</label>
                        <input type="number" class="form-control" name="Umum" value="<?= ambil_input('Umum') ?>">
                        </div>

                        <button type="submit" class="btn btn-warning w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total !== 0): ?>
                <div class="card-footer mt-2">
                    <p class="mt-3">Total Tiket Pelajar : Rp 5.000 x <?= ambil_input('Pelajar'); ?>  Total = Rp <?= number_format($total_tiket_pelajar, 0, ",", ".") ?></p>
                    <p class="mt-3">Total Tiket Umum : Rp 8.000 x <?= ambil_input('Umum'); ?>  Total = Rp <?= number_format($total_tiket_umum, 0, ",", ".") ?></p>
                    <p class="fs-5">Total Bayar : Rp <?= number_format($total, 0, ",", ".") ?></p>
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
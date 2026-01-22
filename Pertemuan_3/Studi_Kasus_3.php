<?php 

$total = 0;
$Pelajar = 0;
$Umum = 0;


function ambil_input($name) {
    $ambil_all = $_POST[$name] ??"";
    return $ambil_all;
}

function hitung_nilai($name) {
    $belanja = ambil_input($name);
    if ($belanja >= 200000) {
        return $belanja * 0.8;
    } elseif ($belanja >= 100000) { 
        return $belanja * 0.9;
    } elseif ($belanja < 100000) {
        return $belanja;
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $total_belanja = hitung_nilai('total_belanja');
    $total = $total_belanja;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskon</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-5">Diskon (dengan function)</h5>
                </div>
                <div class="card-body">
                    <div class="menu">
                        <h5>Harga</h5>
                        <ol>
                            <li>Total ≥ Rp 200.000 → Diskon 20%</li> 
                            <li>Total ≥ Rp 100.000 → Diskon 10%</li>
                            <li>Total < Rp 100.000 → Tidak ada diskon</li>
                        </ol>
                    <form method="POST" >
                        <div class="mb-3 mt-3">
                        <label for="">Total Belanja</label>
                        <input type="number" class="form-control" name="total_belanja" value="<?= ambil_input('total_belanja') ?>">
                        </div>

                        <button type="submit" class="btn btn-success w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total !== 0): ?>
                <div class="card-footer mt-2">
                    <p class="mt-3">Total Belanja: <?= ambil_input('total_belanja'); ?> || Total setelah diskon = Rp <?= number_format($total, 0, ",", ".") ?></p>
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
<?php 

$total = 0;
$harga_nasi_goreng = 0;
$harga_mie_ayam = 0;
$nasi_goreng = 0;
$mie_ayam = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nasi_goreng = $_POST['nasi_goreng'];
    $mie_ayam = $_POST['mie_ayam'];

    $harga_nasi_goreng = $nasi_goreng * 12000;
    $harga_mie_ayam = $mie_ayam * 10000;

    $total = $harga_nasi_goreng + $harga_mie_ayam;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-5">Kasir Kantin Sekolah (Tanpa Function)</h5>
                </div>
                <div class="card-body">
                    <div class="menu">
                        <h5>Menu</h5>
                        <ol>
                            <li>Nasi Goreng - Rp 12.000</li> 
                            <li>Mie Ayam - Rp 10.000</li>
                        </ol>
                    <form method="POST" >
                        <div class="mb-3 mt-3">
                        <label for="">Nasi Goreng</label>
                        <input type="number" class="form-control" name="nasi_goreng" value="<?= $nasi_goreng ?>">
                        </div>
                        <div class="mb-3">
                        <label for="">Mie Ayam</label>
                        <input type="number" class="form-control" name="mie_ayam" value="<?= $mie_ayam ?>">
                        </div>

                        <button type="submit" class="btn btn-danger w-100">Hitung Total</button>
                    </form>
                </div>

                <?php if ($total !== 0): ?>
                <div class="card-footer mt-2">
                    <p class="mt-3">Total Nasi Goreng : Rp 12.000 x <?= $nasi_goreng; ?>  Total = Rp <?= number_format($harga_nasi_goreng, 0, ",", ".") ?></p>
                    <p class="mt-3">Total Mie Ayam : Rp 10.000 x <?= $mie_ayam; ?>  Total = Rp <?= number_format($harga_mie_ayam, 0, ",", ".") ?></p>
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
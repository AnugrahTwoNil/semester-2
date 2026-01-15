<!-- PHP -->

<?php
$hasil = null;
$konversi = '';
$bilangan1 = '';
$bilangan2 = '';

    if($_SERVER['REQUEST_METHOD'] ===  'POST') {
        $bilangan1 = $_POST['angka1'];
        $bilangan2 = $_POST['angka2'];
        $konversi = $bilangan2 / 100;
        $IMT = $bilangan1 / ($konversi * $konversi);
        if ($IMT < 18.49) {
            $hasil = "Underweight";
        } elseif ($IMT < 24.9) {
            $hasil = "Normal weight";
        } elseif ($IMT < 27){
            $hasil = "Overweight";
        } elseif($IMT >27){
            $hasil = "Obesity";
        }
    }
?>
<!-- PHP -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <style>
        #hasil {
            border-color:#0B5ED7;       
            border-radius: 0px 0px 5px 5px;
        }
    </style>
        <div class="card shadow" style="width: 20%">
            <div class="card-body">
                <h3 class="card-title text-center mb-3 fw-bold">
                    Kalkulator
</h3>
        <div class="container"> 
        <div class="col" id="kalulator">
<form method="POST">
<div class="mb-3">
    <input type="number" class="form-control" id="angka1" name="angka1" placeholder="Berat Badan (kg)" value="<?= $bilangan1 ?? '' ?>">
</div>
<div class="mb-3">
    <input type="number" class="form-control" name="angka2" id="angka2  " placeholder="Tinggi Badan (cm)" value="<?= $bilangan2 ?? '' ?>">
</div>

<button type="submit" class="btn btn-primary w-100">Hitung</button></div>
</div></div>
</form> 
    <?php if($hasil !== null): ?>
<div class="text-center mt-3 bg-primary text-white p-2 fw-bold" id="hasil">
    IMT: <?php echo $IMT; ?> <br>
    <?=$hasil ?>
</div>
<?php endif; ?>
</div>
            </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<?php 
$number1 = '';
$hasil = null;

    if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
        $number1 = $_POST['number1'];

        if ($number1 > 75) {
            $hasil = "Lulus";
        } else{
            $hasil = "Tidak Lulus";
        }
    }
?>

<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <title>FORM</title>


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>




<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow" style="width: 30%">
        <div class="card-body">
            <H5 class="card-title text-center">Data Siswa</h5>
            <form method="POST">
                <div class="mb-3">
                    <input class="form-control" type="Number" name="number1" id="" placeholder="" value="<?= $number1 ?? '' ?>" >
                </div>
                <button class=" btn btn-primary w-100"> Hasil </button>
            </form>

            <?php if (isset($hasil)) : ?>
                <div class="text-center mt-3 bg-primary text-white p-2 fw-bold rounded" id="hasil">
                    Hasil: <?php echo $hasil; ?>
                </div>


            <?php endif; ?>
        </div>
</body>
</html>



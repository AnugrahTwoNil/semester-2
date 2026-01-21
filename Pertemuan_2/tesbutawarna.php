<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['Nama'] ?? '';
    $jawaban1 = $_POST['jawaban1'] ?? '';
    $jawaban2 = $_POST['jawaban2'] ?? '';
    $jawaban3 = $_POST['jawaban3'] ?? '';
    $jawaban4 = $_POST['jawaban4'] ?? '';
    $jawaban5 = $_POST['jawaban5'] ?? '';
    $jawaban6 = $_POST['jawaban6'] ?? ''; 

    $score = 0;

    if ($jawaban1 == "8") {
        $result1 = "Normal";
    }else {
        $result1 = "Buta Warna";
    }
    if ($jawaban2 == "3") {
        $result2 = "Normal";
    }else {
        $result2 = "Buta Warna";
    }
    if ($jawaban4 == "3") {
        $result4 = "Normal";
    }else {
        $result4 = "Buta Warna";
    }
    if ($jawaban5 == "4") {
        $result5 = "Normal";
    }else {
        $result5 = "Buta Warna";
    }  
    if ($jawaban6 == "9") {
        $result6 = "Normal";
    }else {
        $result6 = "Buta Warna";
    }
    if ($jawaban3 == "5") {
        $result3 = "Normal";
    }else {
        $result3 = "Buta Warna";
    }
}

?>

<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <title>BUTA KAMU!!!/title>


    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>




<body class="bg-light d-flex justify-content-center align-items-center min-vh-100">
<style>
    #result6 {
        border-radius: 0px 0px 5px 5px;
    }
    #hasil {
        width: 30%;
    }
</style>

    <div class="card shadow" style="width: 70%">
        <div class="card-body">
            <H5 class="card-title text-center bg-primary p-3 rounded text-white">Test Buta Warna</h5>
            <form method="POST">
                <div class="mb-3">
                    <label for="Nama">Nama</label>
                    <input class="form-control" type="string" name="Nama" id="" placeholder="Masukan Nama Anda" value="<?php echo $nama ?? ''; ?>">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-column align-items-center">
                        <h5>Gambar 1</h5>
                        <img src="asset/8.png" alt="" width=50% class="mb-3">
                        <input type="number" name="jawaban1" class="form-control mb-3" placeholder="Masukan Jawaban" value="<?php echo $jawaban1 ?? ''; ?>">
                        </div>
                        <div class="col d-flex flex-column align-items-center">
                        <h5>Gambar 2</h5>
                        <img src="asset/3.png" alt="" width=50% class="mb-3">
                        <input type="number" name="jawaban2" class="form-control mb-3" placeholder="Masukan Jawaban" value="<?php echo $jawaban2 ?? ''; ?>">
                        </div>
                        <div class="col d-flex flex-column align-items-center">
                            <h5>Gambar 3</h5>
                            <img src="asset/5.png" alt="" width=50% class="mb-3">
                            <input type="number" name="jawaban3" class="form-control mb-3" placeholder="Masukan Jawaban" value="<?php echo $jawaban3 ?? ''; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex flex-column align-items-center">
                        <h5>Gambar 4</h5>
                        <img src="asset/3-2.png" alt="" width=50% class="mb-3">
                        <input type="number" name="jawaban4" class="form-control" placeholder="Masukan Jawaban" value="<?php echo $jawaban4 ?? ''; ?>">  
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <h5>Gambar 5</h5>
                        <img src="asset/4.png" alt="" width=50% class="mb-3">
                        <input type="number" name="jawaban5" class="form-control" placeholder="Masukan Jawaban" value="<?php echo $jawaban5 ?? ''; ?>">
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <h5>Gambar 6</h5>
                        <img src="asset/9.png" alt="" width=50% class="mb-3">
                        <input type="number" name="jawaban6" class="form-control" placeholder="Masukan Jawaban" value="<?php echo $jawaban6 ?? ''; ?>">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-3">
                <button class=" btn btn-primary justify-content-center align-items-center" id="hasil"> Hasil </button>
            </div>
            </form>
            <h5 class="mt-3 fw-bold ms-2">
        <?php if (isset($nama)) : ?>
            Nama Peserta : <?php echo $nama; ?>
            <?php endif; ?>
    </h5>
        <?php if (isset($result1)) : ?>
                <div class="mt-3 bg-primary text-white p-2 fw-bold" id="result1">
                    Tes1: <?php echo $result1; ?>
                </div>
                <?php endif; ?>
                <?php if (isset($result2)) : ?>
                <div class="bg-primary text-white p-2 fw-bold" id="result2">
                    Tes2: <?php echo $result2; ?>
                </div>
                <?php endif; ?>
                <?php if (isset($result3)) : ?>
                <div class="bg-primary text-white p-2 fw-bold" id="result3">
                    Tes3: <?php echo $result3; ?>
                </div>
                <?php endif; ?>
                <?php if (isset($result4)) : ?>
                <div class="bg-primary text-white p-2 fw-bold" id="result4">
                    Tes4: <?php echo $result4; ?>
                </div>
                <?php endif; ?>
                <?php if (isset($result5)) : ?>
                <div class="bg-primary text-white p-2 fw-bold" id="result5">
                    Tes5: <?php echo $result5; ?>
                </div>
                <?php endif; ?>
                <?php if (isset($result6)) : ?>
                <div class="bg-primary text-white p-2 fw-bold" id="result6">
                    Tes6: <?php echo $result6; ?>
                </div>
                <?php endif; ?>
        </div>
</body>
</html>




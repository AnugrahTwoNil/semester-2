<?php 
include 'config.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Visi</th>
            <th>Misi</th>
            <th>Foto</th>
        </tr>


        
        <?php 
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM tbl_calon");
        foreach($data as $d):?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d ['nama_calon'] ?></td>
            <td><?= $d ['visi'] ?></td>
            <td><?= $d ['misi'] ?></td>
            <td><?= $d ['foto'] ?></td>
        </tr>
        
        <?php endforeach; ?>



    </table>
</body>
</html>
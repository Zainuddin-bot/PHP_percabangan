<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$golongan = $_POST['golongan'];

switch ($golongan) {
    case 'A':
        $gapok = 1000000;
        break;
    case 'B':
        $gapok = 700000;
        break;    
    case 'C':
        $gapok = 500000;
        break;    
    default:
    $gapok = 0;
        break;
}

switch ($status) {
    case 'kawin':
        $tunjangan = 0.1 * $gapok;
        break;
    case 'belum_kawin':
        $tunjangan = 0.01 * $gapok;
        break;
    case 'waria':
        $tunjangan = 0;
        break;
    default:
    $tunjangan = 0;
        break;
}

$gaji_bersih = $gapok + $tunjangan;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: auto;
        padding: 2rem;
    }

    .form {
        padding: 1rem;
        text-align: left;
        border-radius: 3px;
        width: 300px;
        height: 350px;
        background-color: gray;
    }
    </style>
</head>

<body>
    <form class="form">
        <h1>perhitungan gaji</h1>
        <p>nama : <?= $nama; ?></p>
        <p>alamat : <?= $alamat; ?></p>
        <P>status : <?= $status; ?></P>
        <p>golongan : <?= $golongan ?></p>
        <p>gaji pokok : Rp <?= number_format($gapok); ?></p>
        <p>tunjangan : Rp <?= number_format($tunjangan); ?></p>
        <p>gaji bersih : Rp <?= number_format($gaji_bersih); ?></p>
    </form>
</body>

</html>
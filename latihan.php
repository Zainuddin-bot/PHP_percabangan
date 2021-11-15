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
        padding: 3rem;
        text-align: left;
        border-radius: 3px;
        width: 300px;
        height: 250px;
        background-color: gray;
    }
    </style>
</head>

<body>
    <form class="form" action="gaji.php" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama"><br>
        <label for="alamat">Alamat</label>
        <textarea name="alamat"></textarea> <br>
        <label for="status">Status</label>
        <select name="status">
            <option value="" selected>Pilih Status</option>
            <option value="kawin">Kawin</option>
            <option value="belum_kawin">Belum Kawin</option>
            <option value="waria">waria</option>
        </select> <br>
        <label for="">Golongan</label>
        <select name="golongan" id="">
            <option value="" selected>Pilih Golongan</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
        </select> <br> <br>
        <button type="submit">Hitung</button>
        <button type="reset">Reset</button>
    </form>
</body>

</html>
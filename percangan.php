<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="gaji.php" method="post">
        <label for="nama">Nama</label> <br>
        <input type="text" name="nama"><br>
        <label for="alamat">Alamat</label> <br>
        <textarea name="alamat"></textarea> <br>
        <label for="status">Status</label> <br>
        <select name="status">
            <option value="" selected>Pilih Status</option>
            <option value="kawin">Kawin</option>
            <option value="belum_kawin">Belum Kawin</option>
        </select> <br>
        <label for="">Golongan</label><br>
        <select name="golongan" id="">
            <option value="" selected>Pilih Golongan</option>
            <option value="A">A</option>
            <option value="B">B</option>
        </select> <br> <br>
        <button type="submit">Hitung</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
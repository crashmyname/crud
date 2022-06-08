<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
</head>
<body>
    <form action="input.php" method="post">
    Nama : <input type="text" name="nama"> <br>
    Tanggal Lahir : <input type="date" name="tgl_lahir"> <br>
    Alamat : <input type="text" name="alamat"> <br>
    <input type="submit" name="kirim" value="input">
    </form>

    <hr>

    <?php 
    include('show.php');
    ?>
</body>
</html>
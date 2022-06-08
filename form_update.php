<?php
include('kon.php');

$sql="select * from data where id='$_GET[key]'";
$data=$db->prepare($sql);
$data->execute();
$tampil=$data->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $tampil['id']?>">
    Nama : <input type="text" name="nama" value="<?php echo $tampil['nama']?>"> <br>
    Tanggal Lahir : <input type="date" name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']?>"> <br>
    Alamat : <input type="text" name="alamat" value="<?php echo $tampil['alamat']?>"> <br>
    <input type="submit" name="kirim" value="input">
    </form>

    <hr>

    <?php 
    include('show.php');
    ?>
</body>
</html>
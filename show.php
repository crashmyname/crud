<?php
include('kon.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tanggal Lahir</td>
            <td>Alamat</td>
            <td>action</td>
        </tr>
        <?php
            $sql = "select * from data";
            $data = $db->prepare($sql);
            $data->execute();
            $no=1;
            while($tampil = $data->fetch()){
            
            ?>
        <tr>
            
            <td><?= $no; ?></td>
            <td><?= $tampil['nama']?></td>
            <td><?= $tampil['tgl_lahir']?></td>
            <td><?= $tampil['alamat']?></td>
            <td><a href="form_update.php?key=<?php echo $tampil['id']?>">update</a>||<a href="delete.php?key=<?php echo $tampil['id']?>">Deleted</a></td>
        </tr>
        <?php $no++ ;} ?>
    </table>
    
</body>
</html>
<?php

include('kon.php');

$nama=$_POST['nama'];
$tgl=$_POST['tgl_lahir'];
$almt=$_POST['alamat'];

$sql="update data set nama='$nama',tgl_lahir='$tgl',alamat='$almt' where id='$_POST[id]'";
$data=$db->prepare($sql);
$data->execute();

echo "<script>alert('Data Berhasil Diubah')</script>";
echo "<script>document.location='form.php';</script>";
?>


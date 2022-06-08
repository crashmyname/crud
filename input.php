<?php

include('kon.php');

$nama=$_POST['nama'];
$tgl=$_POST['tgl_lahir'];
$almt=$_POST['alamat'];

$query="INSERT INTO `data`(`id`, `nama`, `tgl_lahir`, `alamat`) VALUES ('','$nama','$tgl','$almt')";
$data= $db->prepare($query);
$data->execute();

echo "<script>alert('Data Berhasil Disimpan')</script>";
echo "<script>document.location='form.php';</script>";
?>
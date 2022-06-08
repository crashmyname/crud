<?php

include('kon.php');

$sql="delete from data where id='$_GET[key]'";
$data=$db->prepare($sql);
$data->execute();

echo "<script>alert('Data Berhasil dihapus')</script>";
echo "<script>document.location='form.php';</script>";
?>


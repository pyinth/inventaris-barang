<?php
include 'database.php';

$id=$_POST['no'];
$tgl=$_POST['tgl'];
$kode=$_POST['KodeB'];
$name=$_POST['NameB'];
$merk=$_POST['Merk'];
$dist=$_POST['Dist'];
$qty=$_POST['Qty'];
$thn=$_POST['thn'];
$asal=$_POST['asal'];
$tglp=$_POST['tglP'];
$kdn=$_POST['kdnB'];
$harga=$_POST['harga'];
$ket=$_POST['ket'];

$edit = inputdata("UPDATE inventaris_barang SET no='$id', tanggal='$tgl', kode_barang='$kode', nama_barang='$name', uraian_barang='$merk',
        distributor='$dist', kwantitas='$qty', thn='$thn', asal_barang='$asal', tgl_perolehan='$tglp', keadaan_barang='$kdn', harga='$harga', ket='$ket', WHERE id=$id");

if ($edit) {
    header("location:inventory.php");
}
?>
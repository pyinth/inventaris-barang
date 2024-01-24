<?php
  require_once("database.php");
  
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

  $simpan_data=inputdata("INSERT INTO inventaris_barang (no,tanggal,kode_barang,nama_barang,uraian_barang,distributor,kwantitas,thn,asal_barang,tgl_perolehan,keadaan_barang,harga,ket) 
  VALUES ('$id','$tgl','$kode','$name','$merk','$dist','$qty','$thn','$asal','$tglp','$kdn','$harga','$ket')");
  
  if ($simpan_data) {
      header("location:inventory.php");
  }
?>
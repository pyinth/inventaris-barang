<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pplg_3_inventaris_barang');

$koneksi = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Connection failed: " . mysqli_connect_error());

function tampildata($kueri)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, $kueri);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}

function inputdata($inputdata)
{
    global $koneksi;
    $sql = mysqli_query($koneksi, $inputdata);
    if ($sql) {
        return true;
    } else {
        return "Error: " . mysqli_error($koneksi);
    }
}
?>

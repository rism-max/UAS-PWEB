<?php
include('crudmk.php');
$nama_penumpang =	$_POST['nama_penumpang'];
$kode_tiket = $_POST['kode_tiket'];
$cara_bayar = $_POST['cara_bayar'];
$hasil = tambahBeli($nama_penumpang, $kode_tiket, $cara_bayar);
    if($hasil > 0)
        header("Location: beli.php");
    else {
        header("Location: gagaltambah.php");
    }
?>
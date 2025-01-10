<?php

include "koneksi.php";

$objek=new koneksi('localhost','root','','buku');
$objek->cekkoneksi();


$objek1=new buku('localhost','root','','buku');
$objek1->cekkoneksi();
$objek1->tambahbuku();
?>
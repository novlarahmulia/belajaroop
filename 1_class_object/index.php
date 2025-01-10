<?php

include "buku.php";

$objek=new buku();//instansiasi (instance)
$objek->info();

$objek1=new buku();
$objek1->info();
?>
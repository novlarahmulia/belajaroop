<?php

include "buku.php";

$objek=new buku();
$objek->isidata("pemograman web","novla","smkgoding");
$objek->cetakinfo();

$objek1=new buku();
$objek1->isidata("pemograman berorientasi objek","ahmadi muslim","smkgoding");
$objek1->cetakinfo();
?>
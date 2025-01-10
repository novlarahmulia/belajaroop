<?php

include "class/buku.php";
$buku=new buku();
$aksi=$_GET['aksi'];

if($aksi=='tambah'){
    $buku->tambahdata($_POST['judul'],$_POST['pengarang'],$_POST['penerbit']);

}elseif($aksi=='hapus'){
$buku->hapusdata($_GET['id']);

}elseif($aksi=='ubah'){
    $buku->ubahdata($_POST['id'],$_POST['judul'],$_POST['pengarang'],$_POST['penerbit']);

}
header("location:index.php");
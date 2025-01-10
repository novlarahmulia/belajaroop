<?php

include "koneksi.php";

class buku extends koneksi
{

    public function tampilsemua()
    {
        $query = "SELECT * FROM buku";
        $sql = mysqli_query($this->koneksi, $query);

        while ($data = mysqli_fetch_array($sql)) {
            $datas[] = $data;
        }
        if (isset($datas)) {
            return $datas;

        } else {
            return 0;
        }

    }

    public function tambahdata($judul, $pengarang, $penerbit)
    {
        $query = "INSERT INTO buku SET judul='{$judul}', pengarang='$pengarang', penerbit='{$penerbit}'";
        mysqli_query($this->koneksi, $query);
    }

    public function ubahdata($id, $judul, $pengarang, $penerbit)
    {
        $query = "UPDATE buku SET judul='{$judul}', pengarang='$pengarang', penerbit='{$penerbit}' WHERE id={$id}'";
        mysqli_query($this->koneksi, $query);
    }
    public function hapusdata($id)
    {
        $query = "DELETE FROM buku WHERE id='{$id}'";
        mysqli_query($this->koneksi, $query);
    }

    public function caridatabyid($id)
    {
        $query = "SELECT * FROM buku WHERE id='{$id}'";
        $sql = mysqli_query($this->koneksi, $query);
        $data = mysqli_fetch_assoc($sql);
        return $data;
    }

}
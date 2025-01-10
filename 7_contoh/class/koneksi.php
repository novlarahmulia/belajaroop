<?php
class koneksi{
    private $server='localhost';
    private $user='root';
    private $pass='';
    private $database='belajaroopnovla';
    protected $koneksi;

    public function __construct()
    {
        $this->koneksi=mysqli_connect($this->server,$this->user,$this->pass,$this->database);
    }
    public function cekkoneksi(){
        if(mysqli_connect_errno()){
            echo "koneksi gagal";
        }else{
            echo "koneksi berhasil";
        }
    } 

}
<?php

class koneksi{
    protected $server;
    protected $username;
    protected $password;
    protected $database;

    public function __construct($server,$username,$password,$database){
        $this->server=$server;
        $this->username=$username;
        $this->$password=$password;
        $this->$database=$database;

    }

    public function cekkoneksi(){
        echo "koneksi berhasil<br>";
    }
}

class buku extends koneksi{

    public function tambahbuku(){
        echo "data buku berhasil ditambahkan";
    }
}
?>
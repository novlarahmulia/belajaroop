<?php

class buku{

    var $judul;
    var $pengarang;
    var $penerbit;
    function __construct($title,$author,$publisher)
    {
        $this->judul=$title;
        $this->pengarang=$author;
        $this->penerbit=$publisher;

    }
    function __destruct()
    {
        echo "judul :".$this->judul."<br>";
        echo "pengarang :".$this->pengarang."<br>";
        echo "penerbit :".$this->penerbit."<br>";

        echo "<br>";
    }
}
?>





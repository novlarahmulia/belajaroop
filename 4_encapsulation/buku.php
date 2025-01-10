<?php

class buku{
    private $judul;
    private $pengarang;
    private $penerbit;

    public function setjudul($title){
        $this->judul=$title;
    }

    public function setpengarang($author){
        $this->pengarang=$author;
    }

    public function setpenerbit($publisher){
        $this->pengarang=$publisher;
    }


}
?>
<?php

class buku{
    //properties
    var $judul;
    var $pengarang;
    var $penerbit;

    //method
    function cetakinfo(){
        echo "judul:". $this->judul."<br>";
        echo "pengarang:". $this->pengarang."<br>";
        echo "penerbit:". $this->penerbit."<br>";
    }

            function isidata($title,$author,$publisher){
                $this->judul=$title;
                $this->pengarang=$author;
                $this->penerbit=$publisher;
            }
        }
        ?>


    



<?php

include "class/buku.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <a href="view/tambah.php">tambah data</a>
    <table border="1">
       <thead> 
        <tr>
            <th>no</th>
            <th>judul</th> 
            <th>pengarang</th>
            <th>penerbit</th>
            <th>aksi</th>

        </tr>
       </thead> 
       <tbody>
        <?php
        $no=1;
        $objek=new buku();
        if ($objek->tampilsemua()!=0){
            foreach($objek->tampilsemua() as $data){

                echo"<tr>
                <td>$no</td>
                <td>$data[judul]</td> 
                <td>$data[pengarang]</td>
                <td>$data[penerbit]</td>
                <td>
                <a href='view/ubah.php?id=$data[id]'>ubah</a>
                <a href='controllerbuku.php?aksi=hapus&id=$data[id]'>hapus</a>
                </td>
            </tr>";
            $no++;
        }
       
        }

      
        ?>
       </tbody>
    </table>
</body>
</html>

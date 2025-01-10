<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data buku</title>
</head>
<body>
    <?php
        include "../class/buku.php";
        $objek=new buku();
        $data=$objek->caridatabyid($_GET['id'])
    ?>
    <form action="../controllerbuku.php?aksi=ubah" method="post">
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <label for="judul">judul</label>
        <input type="text" name="judul" id="judul" value="<?=$data['judul']?>">
        <label for="pengarang">pengarang</label>
        <input type="text" name="pengarang" id="pengarang" value="<?=$data['pengarang']?>">
        <label for="penerbit">penerbit</label>
        <input type="text" name="penerbit" id="penerbit" value="<?=$data['penerbit']?>">
        <input type="submit" value="Simpan">
    </form>
</body>

</html>
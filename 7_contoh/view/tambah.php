<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data buku</title>
</head>
<body>
    <form action="../controllerbuku.php?aksi=tambah" method="post">
    <label for="judul">judul</label>
    <input type="text" name="judul" id="judul">
    <label for="pengarang">pengarang</label>
    <input type="text" name="pengarang" id="pengarang">
    <label for="penerbit">penerbit</label>
    <input type="text" name="penerbit" id="penerbit">
    <input type="submit" value="simpan">
    </form>
</body>

</html>
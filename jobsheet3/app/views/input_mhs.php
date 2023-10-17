
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
<h3>Tambah Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=tambah" method="post">
<table class="table table-striped">
        <tr>
            <td>NIM</td>
            <td><input type="text"name="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text"name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat"  cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
            <td></td >
            <td><input type="submit" value="Simpan"class="btn btn-success"></button></td >
        </tr>
    </table>
</form>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
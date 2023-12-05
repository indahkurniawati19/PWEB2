<?php
require '../../index.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regristasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="px-4 py-8">
<h3 class="py-3">Tambah Data Regristasi</h3>
<form action="proses_tambahRegristasi" method="post">

  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" >
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" >
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" >
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Password</label>
    <input type="text" class="form-control" name="password" >
  </div>
  <div class="mb-3">
    <label for="agama" class="form-label">Level</label>
    <select name= "level" class="form-control">
    <option disabled selected>-- PILIH --</option>
    <option value = "pemilik">Pemilik</option>
    <option value = "admin">Admin</option>
    <option value = "pelanggan">Pelanggan</option>
    <option value = "kurir">Kurir</option>
</select>
</div>
        <tr>
        <tr>
            <td></td >
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-success"></button></td >
        </tr>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> 

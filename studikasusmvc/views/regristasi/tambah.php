<?php
require '../../index.php';
?>
  <body>
  <section id="kategori" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
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

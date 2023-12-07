<?php
require '../../index.php';
?>


  <body>

  <section id="kategori" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
<h3 class="py-3">Tambah Data Kategori</h3>
<form action="proses_tambahKategori" method="post">

  <div class="mb-3">
    <label for="nama_barang" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" >
  </div>
  <div class="mb-3">
    <label for="harga_barang" class="form-label">Harga Barang</label>
    <input type="number" class="form-control" name="harga_barang" >
  </div>
  <div class="mb-3">
    <label for="foto" class="form-label">Foto Barang</label>
    <input type="file" class="form-control" name="foto" >
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

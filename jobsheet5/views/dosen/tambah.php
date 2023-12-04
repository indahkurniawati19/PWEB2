
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="px-4 py-8">
<h3 class="py-3">Tambah Data Mahasiswa</h3>
<form action="proses_tambahDosen" method="post">

  <div class="mb-3">
    <label for="nim" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama" >
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">NIDN</label>
    <input type="text" class="form-control" name="nidn" >
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" >
  </div>
        <tr>
            <td></td >
            <td><input type="submit" name="submit" value="Simpan"class="btn btn-success" onclick="showAlert()"></button></td >
        </tr>
</form>
</div>
<script>
    function showAlert(){
        alert ("Data Dosen berhasil ditambahkan")
    }
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
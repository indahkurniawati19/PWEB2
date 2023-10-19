<?php 
//memanggil class database
include '../classes/database.php';
//instansiasi class databases
$db=new database;
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <h3>Edit Data Mahasiswa</h3>
  </head>

  <body>
<form action="proses_mhs.php?aksi=update" method="post">
<?php 
    foreach($db->edit($_GET['id']) as $d){
    ?>
  <div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="hidden" class="form-control" name="id" value="<?php echo $d['id']?>">
    <input type="text" class="form-control" name="nim" value="<?php echo $d['nim']?>">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama"value="<?php echo $d['nama']?>">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']?>">
  </div>
         <input class="btn btn-success" type="submit" value="Simpan">
    <?php
    }
    ?>
    </form>
    </div>
 </body>
 
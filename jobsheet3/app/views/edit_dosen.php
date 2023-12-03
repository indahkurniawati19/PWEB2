<?php 
//memanggil class database
include '../classes/database_dosen.php';
//instansiasi class databases
$db=new database;
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >   
    <h3 class="py-3">Edit Data Dosen</h3>
  </head>
  <div class="px-4 py-8">
  <body>
  <form action="proses_dosen.php?aksi=update" method="post">
  <?php 
    foreach($db->edit_dosen($_GET['id']) as $d){
    ?>

  <div class="mb-3">
  <label for="nim" class="form-label">NIDN</label>
    <input type="hidden" class="from-control" name="id" value="<?php echo $d['id']?>">
    <input type="text" class="form-control" name="nidn" value="<?php echo $d['nidn']?>">
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



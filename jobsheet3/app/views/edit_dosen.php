<?php 
//memanggil class database
include '../classes/database_dosen.php';
//instansiasi class databases
$db=new database;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >   
    <h3>Edit Data Dosen</h3>
  </head>
  <body>

<form action="proses_dosen.php?aksi=update" method="post">
    <?php 
    foreach($db->edit_dosen($_GET['id']) as $d){
    ?>
    <table class="table table-striped">
        <tr>
            <td>NIM</td>
            <td>
            <input type="hidden" name="id" value="<?php echo $d['id']?>">
            <input type="text"name="nidn" value="<?php echo $d['nidn']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text"name="nama"value="<?php echo $d['nama']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat"  cols="30" rows="5"><?php echo $d['alamat']?></textarea></td>
        </tr>
        <tr>
            <td></td >
            <td><input type="submit" value="Simpan"class="btn btn-success"></td >
        </tr>
    </table>
    <?php
    }
    ?>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
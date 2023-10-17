<?php
//memanggilbil class database 
include '../classes/database_dosen.php';
//instansiasi class database
$db=new database;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

<h3>Data Dosen</h3>
<a href="input_dosen.php"class="btn btn-primary">Tambah Dosen</a>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
        <?php
        $no=1;
        foreach($db->tampil_dosen() as $x ){
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nip'] ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td>
            <a href="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href="proses_dosen.php?id=<?php echo $x['id']; ?>&aksi=hapus "class="btn btn-danger">Hapus</a>
            </td>

        </tr>
        <?php
        }
        ?>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<?php
//memanggilbil class database 
include '../classes/database_dosen.php';
//instansiasi class database
$db=new database;
?>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <div class="px-3 py-3">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_mhs.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dosen.php">Dosen</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <body>

  <div class="px-5 py-8">
  <?php 
error_reporting(E_ERROR | E_PARSE);

  if($_GET['succes']==="tambah"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Dosen Berhasil Di Tambahkan!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['succes']==="update"){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Dosen Berhasil Di Edit!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['succes']==="hapus"){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Dosen Berhasil Di hapus!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>

<div class="px-5 py-8">
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
            <td><?php echo $x['nidn'] ?></td>
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
        </div>
</table>
  </body>
  </div>
</html>
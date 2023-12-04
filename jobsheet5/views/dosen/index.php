
<?php 
//memanggil class model data base
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';
//instansiasi class data base
$database=new database;
$db=$database->getKoneksi();

$dosenController=new DosenController($db);
$dosen=$dosenController->getAllDosen();    
?>
  
<div class="px-5 py-8">
  <?php 
error_reporting(E_ERROR | E_PARSE);

  if($_GET['succes']==="tambah"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Mahasiswa Berhasil Di Tambahkan!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['succes']==="update"){
    echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Data Mahasiswa Berhasil Di Edit!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['succes']==="hapus"){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Mahasiswa Berhasil Di hapus!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>
<h3>Data Dosen</h3>
<a href="tambahDosen"class="btn btn-primary mb-3 mt-2">Tambah Dosen</a>
<table class="table table-striped">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIDN</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($dosen as $x){
    ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['nidn'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
         
            <a class="btn btn-warning" href="editDosen?id=<?php echo $x['id'];?>">Edit</a>
            <a class="btn btn-danger"  href="hapusDosen?id=<?php echo $x['id'];?>"
            onclick = "return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
        </td>
    </tr>
    <?php
   
}  
?>
</div>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  </div>
</html>


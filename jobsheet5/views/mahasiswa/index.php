
<?php 
//memanggil class model data base
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';
//instansiasi class data base
$database=new database;
$db=$database->getKoneksi();

$mahasiswaController=new MahasiswaController($db);
$mahasiswa=$mahasiswaController->getAllMahasiswa();    
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
<h3>Data Mahasiswa</h3>
<a href="tambahMahasiswa"class="btn btn-primary mb-3 mt-2">Tambah Mahasiswa</a>
<table class="table table-striped">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Tempat Lahir</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Aksi</th>
</tr>
<?php
$no=1;
foreach($mahasiswa as $x){
    ?>

    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td><?php echo $x['tempat_lahir'] ?></td>
        <td><?php echo $x['jenis_kelamin'] ?></td>
        <td><?php echo $x['agama'] ?></td>
        <td>
         
            <a class="btn btn-warning" href="editMahasiswa?id=<?php echo $x['id'];?>">Edit</a>
            <a class="btn btn-danger"  href="hapusMahasiswa?id=<?php echo $x['id'];?>"
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


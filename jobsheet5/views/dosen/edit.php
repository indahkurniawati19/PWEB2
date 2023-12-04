<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if ($dosenData){
        if (isset($_POST['submit'])){
            $nama = $_POST['nama'];
            $nidn = $_POST['nidn'];
            $alamat = $_POST['alamat'];
           

            $result = $dosenController->updateDosen($id, $nama, $nidn, $alamat);

            if ($result){
                header("location:dosen");
            }else {
                header("location:editDosen");
            }
        }
    }else{
        echo "Mahasiswa tidak ditemukan";
    }
}
?>
<h3>Edit Data Dosen</h3>
<?php
if ($dosenData){
?>
<form action="" method="post">
    <?php
    foreach ($dosenData as $d => $value){
        ?>
        <table border="0">
            <tr>
                <td width="100">
                    <?php
                    echo $d;
                    ?>
                </td>
                <td>
                    <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                </td>
            </tr>
            <?php
    }
    ?>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="Simpan">
        </td>
    </tr>
</table>
</form>
<?php

}
?>
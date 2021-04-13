<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
 $nama = $_POST['nama'];
 $alamat = $_POST['alamat'];
 $model = new Model();
 $model->insert($nama, $alamat);
 header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    $model = new Model();
    $model->update($nim, $nama, $uts, $tugas, $uas);
    header('location:index.php');
   }
   if (isset($_GET['nim'])) {
    $id = $_GET['nim'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php');
   }

?>
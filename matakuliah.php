<?php
include 'model_matakuliah.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
 <title>Matakuliah</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
 <div>
 
<ul class="nav nav-pills">
  <li role="presentation" ><a href="mahasiswa.php">Mahasiswa</a></li>
  <li role="presentation"><a href="absen.php">Absen</a></li>
  <li role="presentation"><a href="nilai.php">Nilai</a></li>
  <li role="presentation"><a href="matakuliah.php">Matakuliah</a></li>
  <li role="presentation"><a href="kontrak_mk.php">Kontrak Mk</a></li>
</ul>
<h1>Data Matakuliah</h1>
 <a href="create.php">Tambah Data</a>
 <br>
<a href="print.php" target="_blank">Cetak Data</a>
 <br>
 <table border="1">
 <thead>
 <tr>
 <th align="center">No.</th>
 <th>nama mk.</th>
 <th>Aksi</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $result = $model->tampil_data();
 if (!empty($result)) {
 foreach ($result as $data) : ?>
 <tr align="center">
 <td><?= $index++ ?></td>
 <td><?= $data->nama_mk ?></td>
 <td>
 <a name="edit" id="edit" href="edit.php
?nim=<?= $data->nim ?>">Edit</a>
 <a name="hapus" id="hapus" href="proses.php?nim=<?= $data->nim ?>">Delete</a>
 </td>
 </tr>
 <?php endforeach;
 } else { ?>
 <tr>
 <td colspan="9">Belum ada data pada tabel nilai
mahasiswa.</td>
 </tr>
<?php } ?>
 </tbody>
 </table>
 </div>
</body>
</html>
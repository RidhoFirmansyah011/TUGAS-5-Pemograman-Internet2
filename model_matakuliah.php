<?php
include 'connection.php';
class Model extends Connection
{
 public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 public function insert($nama_mk)
 {
 $na = $this->na($uts, $tugas, $uas);
 $status = $this->status($na);
 $sql = "INSERT INTO tbl_nilai (nama_mk) VALUES ('$nama_mk)";
 $this->conn->query($sql);
 }
 public function na($uts, $tugas, $uas)
 {
 $na = (0.3 * $uts) + (0.3 * $tugas) + (0.4 * $uas);
 return $na;
 }
 public function status($na)
 {
 $status = "";
 if ($na >= 60 && $na <= 100) {
 $status = "Lulus";
 } else {
 $status = "Tidak Lulus";
 }
 return $status;
 }
 public function tampil_data()
 {
 $sql = "SELECT * FROM matakuliah";
$bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if (!empty($baris)) {
 return $baris;
 }
 }
 public function edit($id)
 {
 $sql = "SELECT * FROM matakuliah WHERE nim='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
 }
 public function update($nama_mk)
 {
 $na = $this->na($uts, $tugas, $uas);
 $status = $this->status($na);
 $sql = "UPDATE matakuliah SET nama_mk='$nama_mk'";
 $this->conn->query($sql);
 }
 public function delete($nim)
 {
 $sql = "DELETE FROM matakuliah WHERE id='$id'";
 $this->conn->query($sql);
 }
}
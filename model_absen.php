<?php
include 'connection.php';
class Model extends Connection
{
 public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 public function insert($nim, $nama, $uts, $uas, $tugas)
 {
 $na = $this->na($uts, $tugas, $uas);
 $status = $this->status($na);
 $sql = "INSERT INTO absen (mhs_id,absen_waktu) VALUES ('$mhs_id','$absen_waktu')";
 $this->conn->query($sql);
 }
 
 public function tampil_data()
 {
 $sql = "SELECT * FROM absen";
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
 $sql = "SELECT * FROM absen WHERE nim='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
 }
 public function update($nim, $nama, $uts, $tugas, $uas)
 {
 $na = $this->na($uts, $tugas, $uas);
 $status = $this->status($na);
 $sql = "UPDATE absen SET nama='$nama', uts='$uts', uas='$ua
s', tugas='$tugas', na='$na',status='$status' WHERE nim='$nim'";
 $this->conn->query($sql);
 }
 public function delete($nim)
 {
 $sql = "DELETE FROM absen WHERE nim='$nim'";
 $this->conn->query($sql);
 }
}
<?php
include 'connection.php';
class Model_absen extends Connection
{
	public function __construct()
	{
		$this->conn = $this->get_connection();
	}
	public function insert($id_absen, $id_mahasiswa, $id_matkul, $waktu_absen)
	{
		$status = $this->status($waktu_absen); 
		$sql = "INSERT INTO tbl_absen (id_absen, id_mahasiswa, id_matkul ,waktu_absen, status) VALUES ('$id_absen', '$id_mahasiswa', '$id_matkul', '$waktu_absen', '$status')";
		$this->conn->query($sql);
	}
	public function status($waktu_absen)
	{
		$status="";
		if($waktu_absen >=7 && $na =12){
			$status="Hadir";
		}else{
			$status="Tidak hadir";
		}
			return $status;
	}
	public function tampil_absen()
	{
		$sql = "SELECT * FROM tbl_absen";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) { 
			$baris[] = $obj;
		}
		if(!empty($baris)){
			return $baris;
		}
	}
	public function edit_absen($id)
	{
		$sql = "SELECT * FROM tbl_absen WHERE id_absen='$id'";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) {
			$baris = $obj;
		}
		return $baris;
	}
	public function update_absen($id, $id_mahasiswa, $id_matkul, $waktu_absen)
	{
		$status=$this->status($waktu_absen);
		$sql = "UPDATE tbl_absen SET id_mahasiswa='$id_mahasiswa', id_matkul='$id_matkul', waktu_absen='$waktu_absen',status='$status' 
		WHERE id_absen='$id'";
		$this->conn->query($sql);
	}
	public function delete2($id_absen)
	{ 
		$sql = "DELETE FROM tbl_absen WHERE id_absen='$id_absen'";
		$this->conn->query($sql);
	}
}
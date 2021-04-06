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
		$na = $this->na($uts,$tugas,$uas);
		$status = $this->status($na); 
		$sql = "INSERT INTO tbl_nilai (nim, nama, uts, uas, tugas, na, status) VALUES ('$nim', '$nama',
				'$uts', '$uas', '$tugas', '$na', '$status')";
		$this->conn->query($sql);
	}
	public function na($uts,$tugas,$uas)
	{
		$na=(0.3*$uts)+(0.3*$tugas)+(0.4*$uas);
		return $na;
	}
	public function status($na)
	{
		$status="";
		if($na >=60 && $na <=100){
			$status="Lulus";
		}else{
			$status="Tidak Lulus";
		}
			return $status;
	}
	public function tampil_data()
	{
		$sql = "SELECT * FROM tbl_nilai";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) { 
			$baris[] = $obj;
		}
		if(!empty($baris)){
			return $baris;
		}
	}
	public function edit($id)
	{
		$sql = "SELECT * FROM tbl_nilai WHERE nim='$id'";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) {
			$baris = $obj;
		}
		return $baris;
	}
	public function update($nim, $nama, $uts, $tugas,$uas)
	{
		$na=$this->na($uts,$tugas,$uas);
		$status=$this->status($na);
		$sql = "UPDATE tbl_nilai SET nama='$nama', uts='$uts', uas='$uas', tugas='$tugas', na='$na',status='$status' WHERE nim='$nim'";
		$this->conn->query($sql);
	}
	public function delete($nim)
	{ 
		$sql = "DELETE FROM tbl_nilai WHERE nim='$nim'";
		$this->conn->query($sql);
	}
	
//tbl_mahasiswa

	public function tampil_mahasiswa()
	{
		$sql = "SELECT * FROM tbl_mahasiswa";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) { 
			$baris[] = $obj;
		}
		if(!empty($baris)){
			return $baris;
		}
	}
	public function insert1($id_mahasiswa, $nama, $semester, $alamat, $no_telp, $email)
	{
		
		$sql = "INSERT INTO tbl_mahasiswa (id_mahasiswa, nama, semester, alamat, no_telp, email) VALUES ('$id_mahasiswa', '$nama',
				'$semester', '$alamat', '$no_telp', '$email')";
		$this->conn->query($sql);
	}
	public function edit1($id_mahasiswa)
	{
		$sql = "SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
		$bind = $this->conn->query($sql);
		while ($obj = $bind->fetch_object()) {
			$baris = $obj;
		}
		return $baris;
	}
	public function update1($id_mahasiswa, $nama, $semester, $alamat, $no_telp, $email)
	{
		$sql = "UPDATE tbl_mahasiswa SET  nama='$nama', semester='$semester', alamat='$alamat', no_telp='$no_telp',email='$email' WHERE id_mahasiswa='$id_mahasiswa'";
		$this->conn->query($sql);
	}
	public function delete1($nama)
	{ 
		$sql = "DELETE FROM tbl_mahasiswa WHERE nama='$nama'";
		$this->conn->query($sql);
	}

	//absen
	
	public function delete2($id_absen)
	{ 
		$sql = "DELETE FROM tbl_absen WHERE id_absen='$id_absen'";
		$this->conn->query($sql);
	}
	public function insert2($id_absen, $id_mahasiswa, $id_matkul, $waktu_absen)
	{
		
		$sql = "INSERT INTO tbl_absen (id_absen, id_mahasiswa, id_matkul, waktu_absen) VALUES ('$id_absen', '$id_mahasiswa', '$id_matkul', '$waktu_absen')";
		$this->conn->query($sql);
	}
	public function status_absen($waktu_absen)
	{
		$status_absen="";
		if($waktu_absen >=7 && $waktu_absen <=12){
			$status_absen="Lulus";
		}else{
			$status2="Tidak Lulus";
		}
			return $status_absen;
	}
}



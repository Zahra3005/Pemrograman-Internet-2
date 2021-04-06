<?php
include 'model.php';
if (isset($_POST['submit_simpanM'])) {
	$id_mahasiswa= $_POST['id_mahasiswa'];
	$nama = $_POST['nama']; 
	$semester = $_POST['semester'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	$email = $_POST['email'];
	$model = new Model();
	$model->insert1($id_mahasiswa ,$nama, $semester, $alamat, $no_telp, $email);
	header('location:mahasiswa.php');
}
if (isset($_POST['submit_editM'])) {
	$id_mahasiswa= $_POST['id_mahasiswa'];
	$nama = $_POST['nama']; 
	$semester = $_POST['semester'];
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['no_telp'];
	$email = $_POST['email'];
	$model = new Model();
	$model->update1($id_mahasiswa ,$nama, $semester, $alamat, $no_telp, $email);
	header('location:mahasiswa.php');
}
if (isset($_GET['nama'])) {
	$id = $_GET['nama'];
	$model = new Model();
	$model->delete1($id);
	header('location:mahasiswa.php');
}

?>
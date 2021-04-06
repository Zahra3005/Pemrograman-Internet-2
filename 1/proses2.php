<?php
include 'model_absen.php';
if (isset($_POST['submit_absen'])) {
	$id_absen = $_POST['id_absen']; 
	$id_mahasiswa = $_POST['id_mahasiswa'];
	$id_matkul = $_POST['id_matkul'];
	$waktu_absen = $_POST['waktu_absen'];
	$model_absen = new model_absen();
	$model_absen->insert($id_absen, $id_mahasiswa, $id_matkul, $waktu_absen);
	header('location:absen.php');
}
if (isset($_POST['submit_edit'])) {
	$id = $_POST['id_absen']; 
	$id_mahasiswa = $_POST['id_mahasiswa'];
	$id_matkul = $_POST['id_matkul'];
	$waktu_absen = $_POST['waktu_absen'];
	$model_absen = new model_absen();
	$model_absen->update_absen($id, $id_mahasiswa, $id_matkul, $waktu_absen);
	header('location:absen.php');
}
if (isset($_GET['id_absen'])) {
	$id = $_GET['id_absen'];
	$model_absen = new Model_absen();
	$model_absen->delete2($id);
	header('location:absen.php');
}


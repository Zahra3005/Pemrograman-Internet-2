<?php
include 'header.html';
$id = $_GET['id_absen'];
include 'model_absen.php';
$model_absen = new Model_absen();
$data = $model_absen->edit_absen($id);
?>
<!doctype html>
<html lang="en">

<head>
	<title>Edit Absensi Mahasiswa</title>
</head>
<br><br><br><br>
<body>
	
	<div class="container">
  	<div class="row">
    	<div class="col-lg-6 d-flex flex-column justify-content-center">
		<img src="assets/img/features-3.png" class="img-fluid" alt="">
	</div>
    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1>Edit Absensi Mahasiswa</h1>
	<br><br>
	<form form align="center" action="proses2.php" method="post"><strong>
		<label>Id Absen</label>
		<br>
		<input class="form-control" type="text" name="id_absen" value="<?php echo $data->id_absen ?>">
		<br>
		<label>Id Mahasiswa</label>
		<br>
		<input class="form-control" type="text" name="id_mahasiswa" value="<?php echo $data->id_mahasiswa ?>">
		<br>
		<label>Id Mata Kuliah</label>
		<br>
		<input class="form-control" type="text" name="id_matkul" value="<?php echo $data->id_matkul ?>">
		<br>
		<label>Waktu Absen</label>
		<br>
		<input class="form-control" type="text" name="waktu_absen" value="<?php echo $data->waktu_absen ?>">
		<br><br></strong>
		<a class="btn btn btn-warning"  href="absen.php">Kembali</a> 
		<button class="btn btn btn-info" type="submit" name="submit_edit">Submit</button> 
	</form>
	<div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="images/home/hero.png" class="img-fluid" alt="">
    </div>
  </div>
</div>
	
	
</body>
<?php
include 'footer.html';
?>
</html>

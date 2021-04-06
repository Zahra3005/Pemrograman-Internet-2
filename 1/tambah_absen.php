<?php
include 'header.html';
?>
<!doctype html>
<html lang="en">

<head>
	<title>Tambah Absensi Mahasiswa</title>
</head>
<br><br><br><br>
<body>

<div class="container">
  <div class="row">

  <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="assets/img/features-4.png" class="img-fluid" alt="">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center">
	<h1 align="center">Tambah Absensi Mahasiswa</h1>
	<a class="btn btn btn-warning" href="absen.php">Kembali</a>
	<br><br>
	<form align="center" action="proses2.php" method="post"> <strong>
		<label>Id Absen</label>
		<br>
		<input class="form-control" type="number" name="id_absen">
		<br>
		<label>Id Mahasiswa</label>
		<br>
		<input class="form-control" type="number" name="id_mahasiswa"><br>
		<label>Id Mata Kuliah</label>
		<br>
		<input class="form-control" type="number" name="id_matkul">
		<br>
		<label>Waktu Absen</label>
        <br>
        <input class="form-control" type="number" name="waktu_absen">
        <br><br></strong>
		<button class="btn btn btn-danger" type="reset">Reset</button>
		<button class="btn btn btn-info" type="submit" name="submit_absen">Submit</button>
		
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
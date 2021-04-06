<?php
include 'header.html';
session_start();
if(isset($_POST['Login'])){
	if(($_POST['nama']=="") && ($_POST['pass']=="")) { echo "User Name dan Password masih kosong"; session_destroy();

	}else{
// user = “aiwida” & password = “ai123”
if(($_POST['nama']=="aiwida") and ($_POST['pass']=="ai123")){
$_SESSION['login']=1;
$_SESSION['username']=$_POST['nama'];

}

if ((isset($_SESSION['login'])) and ($_SESSION['login']==1)){ header("location: index.php");
exit();

}
}
}

?>
<html>
<br><br><br><br>
<head>
    <title>Login</title>
</head>

<body>
<div align="center" class="login">
    <form  name="login" method="POST" action=""> <p><strong>Login</p></strong>
    <p> Username </p><input type="text" name="nama"/>
    <p></p>
    <p> Password </p><input type="password" name="pass"/> <br><br>
    <input button class="btn btn btn-success" type="submit" name="Login" value="Login" />
    </form>
</body>

<?php
include 'footer.html'
?>
</html>
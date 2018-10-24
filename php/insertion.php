<?php
define('localhost', '');
define('id7561929_stuhelp','');
define('id7561929_root','');
define('akash','');
  $con=mysqli_connect("localhost", "id7561929_root", "akash") or die(mysqli_error($con));
  $db = mysqli_select_db($con,"id7561929_stuhelp");
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $addition = "insert into users values('$username','$password','$email','$contact')";
  if (mysqli_query($con,$addition))
	header('Location: ..\alert.html');
  else
    echo "error ".mysqli_error($con);
mysqli_close($con);
?>

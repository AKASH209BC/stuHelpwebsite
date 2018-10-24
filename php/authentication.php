<?php  
$username=$_POST['username'];
$password=$_POST['password'];
 if($username&&$password)
  {
    $con=mysqli_connect("localhost","id7561929_root","akash") or die("Couldn't Connect");
    mysqli_select_db($con,"id7561929_stuhelp");
    $query=mysqli_query($con,"SELECT username,password FROM users WHERE username='$username'");
    $numrows=mysqli_num_rows($query);
    if ($numrows!=0)
    {
      while($row=mysqli_fetch_assoc($query))
      {
        $dbusername=$row['username'];
        $dbpassword=$row['password'];
      }
	if($numrows==1)
	{
		session_start();
		$_SESSION['loggedin']=true;
		$_SESSION['username']=$username;
	}
      if($username==$dbusername&&$password==$dbpassword)
      {
	echo "<html><p>Logined successfully</p></html>";
        $_SESSION['username']=$username;
	echo "Welcome $username!!";
	header('Location: ..\index.php');
      } 
	else {
        header("Location : ..\alert.html");
      }
    } else {
      echo "Invalid Username or Password";
    }
  }
mysqli_close($con);
?>
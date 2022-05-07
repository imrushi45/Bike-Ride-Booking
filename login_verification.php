<?php

include('connection.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

// $output="<script>
// function myFunction() {
//   var txt;
//   var r = confirm('Login Failled! Would you like to try Again ?');
//   if (r == true) {
   
//   } else {
   
//   }
 
// }
// </script>";
	$sql = "SELECT email,password FROM users WHERE email='{$user}' && password='{$pass}'";

	$res=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($res);
	if ($row > 0) {
		echo 1;
		// echo "<script> localStorage.setItem('lastname','{$user}')</script>";
		// header('location:index.html');
	}else{
		echo 0;
		// echo "<script>alert('login Failled !!!! pls try again'); </script>";
	 //  echo "<script>  location.replace('login.html');</script>";




	};


?>

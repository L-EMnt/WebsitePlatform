<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<form method="post" action="login2.php">
			<h1>Login</h1>
			<div class="textBoxdiv">
				<input type="text" placeholder="Username" name="Username">
			</div>
			<div class="textBoxdiv">
				<input type="password" placeholder="password" name="password">
			</div>			
			<input type="submit" value="Login" class="loginBtn" name="login_Btn">
			<div class="signup">
				Don't have an account?
				</br>
				<a href="#">Sign up</a>
			</div>
		</form>
	</body>
</html>
<?php
	$conn = mysqli_connect("localhost", "root","");
	if(isset($_POST['login_Btn'])){
		$Username=$_POST['Username'];
		$password=$_POST['password'];
		$sql= "SELECT * FROM lmntplatform.logindetails WHERE Username = '$Username'";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$resultPassword = $row['password'];
			if($password == $resultPassword){
				header('Location:index2.html');
			}else{
				echo "<script>
				alert('Login insuccessful');
				</script>";
			}
		}
	}
?>
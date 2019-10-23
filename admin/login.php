<?php  
include '../class/AdminLogin.php';
$admin = new AdminLogin();
if($_SERVER['REQUEST_METHOD']== "POST"){
	$Username = $_POST['adminUser'];
	$password = md5($_POST['adminPass']);

	$login = $admin->adminLogin($Username, $password);
}
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<span style="color: red;">
				<?php 

					if(isset($login)){
						echo $login;
					}

				 ?>
			</span>
			<div>
				<input type="text" placeholder="Username"  name="adminUser"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="adminPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="../index.php">Online Grocery Shop</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
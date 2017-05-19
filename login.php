<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
session_start();
/*
if (isset($_SESSION['USER'])){

	header('Location:dashboard.php');
}
*/
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	$Username = $_POST['User'];
	$Password = $_POST['Pass'];
	$hashedPass = sha1($Password);
	$stmt1 = $con -> prepare("SELECT UserName,passward FROM `library`.`users`WHERE UserName= ? AND passward= ? AND GroupID =1 ");
	$stmt1 -> execute(array($Username,$hashedPass));
	$count1=$stmt1 -> rowCount();
	
	if ($count1 > 0  ){
		$_SESSION['USER']=$Username;
		header('Location:form11.html');
		exit();
	} 

	$stmt2 = $con -> prepare("SELECT UserName,passward FROM `library`.`users`WHERE UserName= ? AND passward= ? AND GroupID =0 ");
	$stmt2 -> execute(array($Username,$hashedPass));
	$count2=$stmt2 -> rowCount();
	if ($count2 > 0  ){
		$_SESSION['USER']=$Username;
		header('Location:search.html');
		exit();
	} else{
		echo "<h1>";
		echo "You must sign up First";
		echo "</h1>";
	}
}

?>

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Library Member Login Form A Flat Responsive Widget Template :: W3layouts</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>


	<h1>COMPLETE THE LIBRARY FORM</h1>

	<div class="container w3layouts agileits">

		<div class="login w3layouts agileits">
			<h2>Sign In</h2>
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				<input type="text" Name="User" placeholder="Username" required="">
				<input type="password" Name="Pass" placeholder="Password" required="">
				<input type="submit" value="Sign In" >
			</form>
			<ul class="tick w3layouts agileits">
				<li>
					<input type="checkbox" id="brand1" value="">
				
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
			<div class="send-button w3layouts agileits">
				<form>
					
				</form>
			</div>
			<a href="#">Forgot Password?</a>
			<div class="social-icons w3layouts agileits">
				<p style="margin-left: -40px;">- Or Sign In With -</p>
				<div style="margin-right: 50px; padding: 10px;">
					<a href="#"  style="margin-right: 25px;">Facebook</a>
					<a href="#"   style="margin-right: 25px;">Twitter</a>
					<a href="#">Google+</a>
				</div>	
					<div class="clear"> </div>
			</div>
			<div class="clear"></div>
		</div>

		

		<div class="clear"></div>

	</div>

</body>
<!-- //Body -->

</html>
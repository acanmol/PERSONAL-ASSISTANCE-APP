<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Personal Assistant</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="">
				<h1><a href="#">Personal Assistant</a></h1>
				<nav id="nav">
					<ul>
						<li><a>Home</a></li>
						<li><a href="#" class="button special">Sign Up</a></li>
                                                <li><a href="#" class="button special">Login</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" >
                        <div style="background-color:#f1f1f1">
			<form action="action_page.php" style="border:1px solid #ccc">
                            <div class="container">
                                <br><h1>Sign Up</h1>
                              <p>Please fill in this form to create an account.</p>
                              <hr>
                              <div style="float: left;padding-right: 10%">
                              <label for="first_name">First Name</label>
                              <input type="text" placeholder="Enter First name" name="firstname" requied>
                              </div>
                              <div style="float:left; padding-right: 10%">
                              <label for="middle_name">Middle Name</label>
                              <input type="text" placeholder="Enter Middle name" name="middlename" >
                              </div>
                              <div style="float: left; padding-right: 1%">
                              <label for="last_name">Last Name</label>
                              <input type="text" placeholder="Enter Last name" name="lastname" requied>
                              </div>
                              <br><br><br><br><label for="email"><b>Email</b></label>
                              <input type="text" placeholder="Enter Email" name="email" required>

                              <label for="psw"><b>Password</b></label>
                              <input type="password" placeholder="Enter Password" name="psw" required>

                              <label for="psw-repeat"><b>Repeat Password</b></label>
                              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                           
            

                              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                 
                               <br><button class="button small" type="submit" >Sign Up</button><br>
                             <div style="padding-bottom: 1%"> 
                             <br><button type="button" class="button small">Cancel</button>
                              </div>
                            </div>
                          </form>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
									<h3>Other links</h3>
									<ul class="alt">
										<li><a href="#">Link 1</a></li>
										<li><a href="#">Link 2</a></li>
										<li><a href="#">Link 3</a></li>
										<li><a href="#">Link 4</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="6u">
							<h2>Place Holder Text</h2>
							<p>Place Holder desc</p>
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							</ul>
						</div>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="#">Placeholder</a></li>
						<li>Images: <a href="#">Placeholder</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>


<?php
$fn=$_GET['firstname'];
$mn=$_GET['middlename'];
$ln=$_GET['lastname'];
$gm=$_GET['email'];
$pwd=$_GET['psw'];
$cpwd=$_GET['psw-repeat'];
$query="insert into app values('$fn','$mn','$ln','$gm','$pwd','$cpwd')";
$data=mysqli_query($conn,$query);
if($data)
{
	echo"data inserted in database";

}
else
{
echo"data not inserted";
}
?>

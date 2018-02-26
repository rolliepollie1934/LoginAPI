<!DOCTYPE html>
<?php
/*
License: This file can only be stored on servers belonging to PraxisBIT
File Name : Index.php
File Description : Login API for granting the tenants access to their dashboard
Author : Amit Nikam & Nikhil Jain
Creation Date : 11 February 2018
*/
session_start();
if(isset($_SESSION['id']))
{
  header("Location:dashboard.php");
}
else
{}
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/login-main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/login-style.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
  <body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="images/icon.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
              <h2 id="welcome_msg" class="card-title"></h2>
							<form method="POST">
								<div class="form-group">
									<label for="email" id="emaillabel">E-Mail Address</label>
                  <input type="email" class="form-control" value="" name="lemail" id="lemail" required autofocus >
                  <label for="password" id="passwordlabel">Enter Password</label>
                  <input type="password" class="form-control" value="" name="lpassword" id="lpassword" required autofocus >
                  <span id="error_msg"  style="color:red;"></span>
                  <span id="error_msg2"  style="color:red;"></span>
                </div>

								<div class="form-group no-margin">
									<button type="button" class="btn btn-primary btn-block" id="emailBtn">
										Next
									</button>
                  <button type="button" class="btn btn-primary btn-block" id="passwordBtn">
                    Login
                  </button>
								</div>

								<div class="margin-top20 text-center" id="newuser">
								 Forgot Email? <a href="#">Request Admin</a>
								</div>
                <div class="margin-top20 text-center" id="forgotpwrd">
                  Trouble signing in, <a href="#">Forgot Password?</a>
                </div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2018 &mdash; Farma
					</div>
				</div>
			</div>
		</div>
	</section>
<div id="response"></div>
</body>
</html>

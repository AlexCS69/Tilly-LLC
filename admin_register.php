<?php
if (isset($_POST['submitBtn'])) {
	include("config.php");
	$sql = "INSERT INTO admin (aname, password)
	VALUES ('$_POST[aname]','$_POST[password]')";
	if (!mysqli_query($con,$sql)){
		die('Error: ' . mysqli_error($con));
	}
	else {
		echo '<script>alert("Successfully registered!");
		window.location.href= "homepage.php";
		</script>';
	}

	mysqli_close($con);
 }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sign up an admin account</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="login_register/css/my-login.css" rel="stylesheet" media="all" type="text/css">

    <!-- web font -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
	<!-- main -->
	<div class="my-login-page">
		<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="login_register/img/logo.jpg" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
						<h4 class="card-title">Sign up an admin account</h4>
				            <form action="admin_register.php" method="post" class="my-login-validation" novalidate="">
							    <div class="form-group">
									<label for="aname">Admin Name</label>
									<input id="aname" type="text" class="form-control" name="aname" required autofocus>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
										<label for="agree" class="custom-control-label"><span>I Agree To The Terms & Conditions</span></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>
					            <div class="field">
					                <input class="btn btn-primary" type="submit" id="register" name="submitBtn" value="Sign Up">
                                </div>	
								<div class="mt-4 text-center">
								<p>Already is admin?  <a href="admin_login.php"> Login Now!</a></p>
								</div>			
				            </form>
			            </div>
		            </div>
                </div>
            </div>		
        </div>
        </section>
	</div>
	<!-- //main -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
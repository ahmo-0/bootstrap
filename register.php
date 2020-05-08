<html>
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="forms.css">
<script src="forms.js"></script>


</head>

<body>
<!-- REGISTRATION FORM -->
<div align="center">
<div class="text-center" style="padding:50px 0">
	<div class="logo">Register</div>
	<!-- Main Form -->
	<div class="login-form-1">
	<form action="login.php" id="register-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="email" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="email">
					</div>
					<div class="form-group">
						<label for="pass1" class="sr-only">Password</label>
						<input type="password" class="form-control" id="pass1" name="pass1" placeholder="password">
					</div>
					<div class="form-group">
						<label for="pass2" class="sr-only">Password Confirm</label>
						<input type="password" class="form-control" id="pass2" name="pass2" placeholder="confirm password">
					</div>
			
					<div class="form-group">
						<label for="ime" class="sr-only">First Name</label>
						<input type="text" class="form-control" id="ime" name="ime" placeholder="first name">
					</div>

					<div class="form-group">
						<label for="priimek" class="sr-only">Last Name</label>
						<input type="text" class="form-control" id="priimek" name="priimek" placeholder="last name">
					</div>

					<div class="form-group">
						<label for="adminkod" class="sr-only">Admin code</label>
						<input type="text" class="form-control" id="adminkod" name="adminkod" placeholder="admin code">
					</div>
				
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>Already have an account? <a href="login.php">login</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</div>
</body>
</html>
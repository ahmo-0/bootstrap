<html>
<!-- All the files that are required -->
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="forms.css">
<script src="forms.js"></script>


</head>
<body>
<div align="center">
<!-- LOGIN FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Login</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form action="index.php" id="login-form" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="email" class="sr-only">Email</label> <br>
						<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="email">
					</div>
					<div class="form-group">
						<label for="lg_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>new user? <a href="register.php">create new account</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</div>
</body>
</html>
<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Portofolio</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
	<link rel="stylesheet" href="login_assets/style.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body style="background-color: #C0C0C0">

	<div id="login">
		
		@if (session('pesan'))
		<div class="alert alert-danger" role="alert">
			<strong>{{ session('pesan') }}</strong>
		</div>
		@endif

		<h2><span class="fontawesome-lock"></span>Sign In</h2>

		
		<script>
			$(".alert").alert();
		</script>

		<form action="/login" method="POST">
			@csrf
			<fieldset>
				<p><label for="email">E-mail address</label></p>
				<p><input type="email" id="email" name="email" required placeholder="Email" ></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" name="password" required placeholder="Password"></p> <!-- JS because of IE support; better: placeholder="password" -->

				<p><input type="submit" value="Sign In" style="cursor: pointer"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->

</body>	
</html>
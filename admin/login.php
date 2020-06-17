<!DOCTYPE html>
<html>
<head>
	<title>Admin|login</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin | Panel</title>
	<meta name="description" content="" />
	<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

	<!-- mobile settings -->
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

	<!-- WEB FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

	<!-- CORE CSS -->
	<link href="../assets1/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	<!-- THEME CSS -->
	<link href="../assets1/css/essentials.css" rel="stylesheet" type="text/css" />
	<link href="../assets1/css/layout.css" rel="stylesheet" type="text/css" />
	<link href="../assets1/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
</head>
<body>
<div class="padding-15">
		<div class="login-box">
			<form action="" id ="adminloginform" method="post" class="sky-form boxed" enctype="multipart/form-data">
				<header><i class="fa fa-users"></i> Sign In</header>
				<fieldset>	
					<section>
						<label class="label">Username</label>
						<label class="input">
							<i class="icon-append fa fa-envelope"></i>
							<input type="text" name = "username" id="username">
							<span class="tooltip tooltip-top-right">Email Address</span>
						</label>
					</section>
					<section>
						<label class="label">Password</label>
						<label class="input">
							<i class="icon-append fa fa-lock"></i>
							<input type="password" name = "password" id="password">
							<b class="tooltip tooltip-top-right">Type your Password</b>
						</label>
					</section>
				</fieldset>
				<footer>
					<button type="submit" name = "login" class="btn btn-primary pull-right btn-submit">Sign In</button>
				</footer>
			</form>
		</div>
	</div>
	<!-- JAVASCRIPT FILES -->
	<script type="text/javascript">var plugin_path = '../assets1/plugins/';</script>
	<script type="text/javascript" src="../assets1/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="../assets1/js/app.js"></script>
	<script type="text/javascript" src="../includes/adminscript.js"></script>
</body>
</html>
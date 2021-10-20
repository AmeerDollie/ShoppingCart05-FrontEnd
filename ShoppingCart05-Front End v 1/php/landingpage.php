<!DOCTYPE html>
<html>
<head>
	<title>Design Igloo</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container" id="container">
<div class="form-container sign-up-container">

<form action="">
	<h1>Create Account</h1>
	<div class="social-container">
		<a href="#" class="social"><i class="fa fa-instagram"></i></a>
		<a href="#" class="social"><i class="fa fa-apple"></i></a>
	</div>
	<span>or use your email for registration</span>
	<input type="text" name="name" placeholder="Enter Valid Name">
	<input type="email" name="email" placeholder="Enter Valid Email">
	<input type="password" name="password" placeholder="Enter Strong Password">
	<button><a href="index.html">Sign Up</a></button>
</form>
</div>
<div class="form-container sign-in-container">
	<form action="#">
		<h1>Log In</h1>
		<div class="social-container">
            <a href="#" class="social"><i class="fa fa-instagram"></i></a>
            <a href="#" class="social"><i class="fa fa-apple"></i></a>
	</div>
	<span>or use your account</span>
	<input type="email" name="email" placeholder="Existing Email">
	<input type="password" name="password" placeholder="Current Password">
	<a href="#">Forgot Your Password</a>

	<button><a href="index.html">Sign In</a></button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left">
			<h1>Welcome Back!</h1>
			<p>Let's take you home</p>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<h1>Let's Begin</h1>

			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>









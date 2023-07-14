<?php
session_start();

if (!isset($_SESSION['user_id']) && !isset($_SESSION['user_email'])) {
?>

	<!DOCTYPE html>
	<html lang="en">
	<header>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="images/logo.png">
    	<title>Show Your Skin</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<link rel="stylesheet" href="login.css">

		<input type="checkbox" name="" id="toggler">
		<label for="toggler" class="fas fa-bars"></label>
		<img src="images/logo.png" alt="" width="50px" height="50px">
		<a href="index.html" class="logo">Show Your Skin<span>.</span></a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.html">about</a>
            <a href="product.php">products</a>
            <a href="review.html">review</a>
            <a href="contact.php">contact</a>
        </nav>
    
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="cartshop.php" class="fas fa-shopping-cart"></a>
            <a href="login.php" class="fas fa-user"></a>
        </div>

	</header>

	<body>
		<div class="d-flex justify-content-center align-items-center">
			<form class="p-5 rounded shadow" action="auth.php" method="post" style="width: 30rem">
				<h2>SIGN IN</h2>
				<h1 class="text-center pb-5 display-4">LOGIN</h1>
				<?php if (isset($_GET['error'])) { ?>
					<div class="alert alert-danger" role="alert">
						<?= htmlspecialchars($_GET['error']) ?>
					</div>
				<?php } ?>
				<div class="mb-3">
					<input type="email" placeholder="Email" name="email" value="<?php if (isset($_GET['email'])) echo (htmlspecialchars($_GET['email'])) ?>" class="form-control" id="exampleInputEmail1">
				</div>
				<div class="mb-3">
					<input type="password" placeholder="Password" class="form-control" name="password" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
				<a href="signup.php" class="ca">Create an account</a>
			</form>
		</div>
	</body>

	</html>

<?php
} else {
	header("Location: index.php");
}
?>
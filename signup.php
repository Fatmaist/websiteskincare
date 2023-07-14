<?php /*
$hashed_password = password_hash ('123', PASSWORD_DEFAULT);
echo $hashed_password;
*/
?>
<!DOCTYPE html>
<html>

<head>
     <link rel="icon" href="images/logo.png">
    <title>Show Your Skin</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" type="text/css" href="login.css">
</head>
<header>

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
     <form action="signup-check.php" method="post">
          <h2>SIGN UP</h2>
          <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
          <?php } else { ?>
               <input type="text" name="name" placeholder="Name"><br>
          <?php } ?>

          <?php if (isset($_GET['email'])) { ?>
               <input type="email" name="email" placeholder="Email" value="<?php echo $_GET['email']; ?>"><br>
          <?php } else { ?>
               <input type="email" name="email" placeholder="Email"><br>
          <?php } ?>

          <input type="password" name="password" placeholder="Password"><br>


          <input type="password" name="re_password" placeholder="Re_Password"><br>

          <button type="submit" class="btn2">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
     </form>
</body>

</html>
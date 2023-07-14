<?php

$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "websiteku";

$conn = mysqli_connect("localhost", "root", "", "websiteku");


function contact($data)
{
    global $conn;

    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $message = $data['message'];

    mysqli_query($conn, "INSERT INTO contact (contactID, contactName, contactEmail, contactPhone, contactMessage) VALUES('', '$name', '$email', '$phone', '$message')");

    return mysqli_affected_rows($conn);
}

if (isset($_POST["send"])) {

    if (contact($_POST) > 0) {
        echo "<script>alert('Your message has been sent successfully!');</script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <img src="images/logo.png" alt="" width="50px" height="50px">
        <a href="#" class="logo">Show Your Skin<span>.</span></a>

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

</html>

<body>
    <div class="container" id="contact">
        <div class="contact-box">
            <div class="left">
                <h2>Contact Us</h2>
                <form action="" method="post">
                    <input type="text" class="box" placeholder="Name" name="name">
                    <input type="email" class="box" placeholder="Email" name="email">
                    <input type="number" class="box" placeholder="Phone" name="phone">
                    <textarea placeholder="Message" class="box" name="message"></textarea>
                    <input type="submit" name="send" value="Send" class="btn">
                </form>
            </div>
            <div class="right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6032370532535!2d106.7892179136354!3d-6.315735751058187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee3e065d4f6b%3A0xe176f81a31564166!2sUniversitas%20Pembangunan%20Nasional%20Veteran%20Jakarta!5e0!3m2!1sen!2sid!4v1668496480469!5m2!1sen!2sid" width="400" height="370" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</body>

</html>
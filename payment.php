<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAILS PAYMENT</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/header.css">

</head>
<body>
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
    <body>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="payment">
            <form action = "payment2.php" method="POST" align="center">
                <h2><b>DETAIL PAYMENT</b></h2>
                Ekspedisi : <input type="radio" name="Ekspedisi" value="JNE">JNE
                <input type="radio" name="Ekspedisi" value="JNT">JNT
                <input type="radio" name="Ekspedisi" value="SICEPAT">SICEPAT <br><br>
                Ongkos Kirim : <select name="Ongkir">
                    <option value="9000">Jakarta - Rp9000 
                    <option value="13000">Bogor - Rp13000    
                    <option value="18000">Bandung - Rp18000 
                    <option value="24000">Semarang - Rp24000 
                </select> <br><br>
                Metode Pembayaran : <select name="Metode_Bayar">
                    <option value="Bank Transfer - BCA">Bank Transfer - BCA
                    <option value="Bank Transfer - BNI">Bank Transfer - BNI 
                    <option value="Bank Transfer - Mandiri">Bank Transfer - Mandiri
                    <option value="Bank Transfer - BRI">Bank Transfer - BRI
                </select> <br><br>
                <input type="submit" class="btn btn-primary" name="submit" Value="Pay Now">
            </form>
        </div>
    </body>
</html>
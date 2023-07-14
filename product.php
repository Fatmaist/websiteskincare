<?php

session_start();

require_once ('db_conn2.php');
require_once ('component.php');


// create instance of Createdb class
$database = new CreateDb("websiteku", "products");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'product.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png">
    <title>Show Your Skin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/product.css">

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

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="login.php" class="fas fa-user"></a>
    </div>
    <section class="products" id="products">

        <h1 class="heading"> <span>BRANDS</span> </h1>

        <h1 class="judul"><span>Features Brand</span></h1>

        <div class="box-container">
            <div class="box">
                
                
                    <div class="icons">
                
                    </div>
                    
                <div class="user">
                    <img src="images/avoskin.jpeg" alt="">
                </div>
                <div class="user1">
                    <img src="images/azarine.jpeg" alt="">
                </div>
                <div class="user2">
                    <img src="images/skintifc.jpeg" alt="">
                </div>
                <div class="user3">
                    <img src="images/something.jpeg" alt="">
                </div>
                <div class="user4">
                    <img src="images/safi.jpeg" alt="">
                </div>
                <div class="user5">
                    <img src="images/whitelab.jpeg" alt="">
                </div>
                <div class="user6">
                    <img src="images/npure.jpeg" alt="">
                </div>
                <div class="content">
                    <div class="price"></div>
                    <div>
            <h1 class="produk"><span>New Product</span></h1>

        </div>
        <br><br><br><br><br><br><br><br><br><br>
        <div class="container">
            <div class="row text-center py-5">
                <?php
                    $result = $database->getData();
                    while ($row = mysqli_fetch_assoc($result)){
                        component($row['ProductName'], $row['ProductPrice'], $row['ProductImage'], $row['ProductID'], $row['ProductDesc']);
                    }
            ?>
            
        </div>
</div>
        </div>

                </div>
        </div>
    </section>
</body>
</html>


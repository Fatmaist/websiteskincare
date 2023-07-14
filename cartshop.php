<?php

session_start();

require_once ("db_conn2.php");
require_once ("component.php");

$db = new CreateDb("websiteku", "products");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cartshop.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">

<?php
    require_once ('header.php');
?>

<div class="container-fluid">
<br><br><br><br><br><br><br><br>
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h2><b>My Cart</b></h2>
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['ProductID'] == $id){
                                    cartElement($row['ProductImage'], $row['ProductName'],$row['ProductPrice'], $row['ProductID']);
                                    $total = $total + (int)$row['ProductPrice'];
                                }
                            }
                        }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h2><b>PRICE DETAILS</b></h2>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <h2>Price</h2>
                        <h2>PPN 5%</h2>
                        <hr>
                        <h2>Amount Payable</h2>
                    </div>
                    <div class="col-md-6">
                        <h2>Rp <?php echo $total; ?></h2>
                        <h2 class="text-success">
                            Rp <?php 
                            $ppn = ($total*0.05);
                            echo $ppn
                            ?>
                            </h2>
                        <hr>
                        <h2>Rp <?php
                            echo $total+$ppn;
                            ?></h2>
                    </div>
                    <form action="checkout.php" method="POST">
                        <br>
                        <button type="submit" class="btn btn-primary" name="Order Now">Order Now</button>
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
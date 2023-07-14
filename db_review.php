<?php 
session_start(); 

$koneksi=mysqli_connect("localhost","root","","websiteku");

if (mysqli_connect_errno()){ // cek kondisi jika koneksi berhasil
echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
    echo "Koneksi berhasil";
}
echo "<br>";
	$name = $_POST['nama'];
	$product = $_POST['product'];
	$foto= $_POST['foto'];
	$komentar= $_POST['komentar'];
	$rate= $_POST['rate'];

	$save=mysqli_query($koneksi, "insert into review (nama, product, foto, komentar, rate) values ('$name','$product','$foto','$komentar','$rate')");
	if($save){
		echo "Data berhasil disimpan!";
	}else{
        echo "Data gagal disimpan!";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="hasil.css">
</head>
<body>

    <header id="navbar">

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

    <div class="back">
        <h1><a href="review.html"> Click here to Back</a></h1>
        <h4 align="center">Review telah ditambahkan!</h4>
    </div>
    

    <section class="review" id="review">    
            <div class="box-container">
            <div class="box">
                <div class="txt3">
                    <h1 align="center">Review</h1>
                </div>
                <div class="img4">
                        <tr>
                            <td>
                            <?php 
                            $sql = "select * FROM review where foto='$foto'";
                            $tampil = mysqli_query($koneksi, $sql);
                            if ($foto= mysqli_fetch_assoc($tampil)){
                            // tampilkan gambar
                            
                            echo "<img src='images/".$foto['foto']."' width='130px' height='130px'/>";}
                            ?> 
                            </td>
                        </tr></div>
                <div class="txt4">
                        <table border="1">
                         
                        <tr>
                            <td><br><br><br><h3>Name&ensp;&ensp;&ensp;&ensp;: </h3></td>
                            <td><br><br><br><?php echo $name; ?></td> 
                        </tr>
                        <tr>
                            <td><br><h3>Product &ensp;: </h3></td>
                            <td><br><?php echo $product; ?></td>
                        </tr>
                        
                        <tr>
                            <td>
                                <br><h3>Review&emsp;: </h3> <br></td><br>
                                <td><?php echo $komentar; ?></td>
                        </tr>    
                    </tr>
                    <tr>
                        <td>
                            <br><br><h3>Rate  &emsp;&ensp;&ensp;: </h3> </td>
                        <td><br><br><?php echo $rate;?></td>
                        
                    </tr>
                   
                        
                          
                    </table>
                </div>

                
            </div>
            </div>

            
        
        </div>
        </section>
        

</body>
</html>







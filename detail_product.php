<?php

    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Product</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Oranienbaum&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oranienbaum&display=swap" rel="stylesheet">

        
        <link rel="stylesheet" href="css/detail_product.css">
    </head>

    <body>
        <?php include 'header.php'; ?>

        <section class="detail" id="detail">
            <div class="content">
                <div class="gambar"><img src="images/avo.jpg" width="410" height="410" ></div>
                <div class="info">
                    <div class="avo1"><img src="images/avo1.jpg" width="110x" height="120px" ></div>   
                    <div class="avo2"><img src="images/avo2.jpg" width="110x" height="120px"  ></div>   
                    <div class="avo3"><img src="images/avo3.jpg" width="110x" height="120px"  ></div>  
                </div>
                <p><i>Serum</i></p>
                <h2><b>Avoskin Miraculous Refining Serum</b></h2>
                <p2><b>Rp 250.000</b></p2>
                <p3>Kandungan dalam produk Avoskin Miraculous <br> Refining Serum ini aman dan sudah teruji secara klinis, <br> 
                    sehingga dapat digunakan untuk usia mulai dari 16 tahun.<br> <br>
                    AVOSKIN MIRACULOUSREFINING merupakan serum  <br>  dengan kandungan10% AHA, 3%BHA, 2%Niacinamide,  
                    dan <br>  Ceramide yang berfungsi mengeksfoliasi serta  mencerahkan  <br>kulit tanpa meninggalkan efek   
                    kulit menjadi kering.</p3>
                <p5><b>Petunjuk Pemakaian :</b><br>
                - Aplikasikan secara merata pada kulit wajah menggunakan ujung jari.<br>
                - Bilas keesokan harinya, dan jangan lupa gunakan sunscreen favoritmu.<br>
                <br> <b>Tips :</b><br>
                - Disarankan untuk kulit sensitif dan berminyak. <br>
                - Diawal pemakaian, hanyak saat malam hari dan 3x seminggu. <br>
                - Hindari terjadinya kontak pada mata saat pemakaian.
                </p5>

                <div class ="konten">
                    <p4><br> Bottle Size: 30ml / 1.0 fl.oz <br><br>
                    Cocok untuk kulit berminyak karena:<br> 
                    - Mengandung Salicylic Acid, yang berfungsi untuk mengurangi minyak berlebih<br>
                    - Mengandung Niacinamide, berfungsi untuk mengontrol<br> minyak pada kulit <br>
                    - Mengandung Glycolic Acid, yang berfungsi untuk menegecilkan pori-pori sehingga meminimalisir minyak berlebih<br>
                    - Mengandung Hamamelis Virginiana (Witch Hazel), yang berfungsi untuk  mengurangi produksi minyak.</p4>
                </div>
            </div>
        </section>
    </body>
</html>
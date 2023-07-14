<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home2</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Oranienbaum&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oranienbaum&display=swap" rel="stylesheet">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/home.css">
    </head>

    <body>
        <?php include 'header.php'; ?>

        <section class="hero">

            <div class="swiper hero-slider">

                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <div class="content">
                            <p>Halo, Beauty </p><br>
                            <h2>AYO TUNJUKAN KULIT SEHAT KAMU ! </h2>
                            <p1>Perawatan diri adalah bagian penting 
                            yang perlu dilakUkan bukan hanya untuk para wanita saja,
                            karena untuk menjalani hidup sehat semua orang berhak untuk merasakannya. 
                            Skincare menjadi salah satu point penting untuk menghaluskan kulit, menenangkan
                            jiwa, dan menenangkan pikiran.</p1><br>

                            <a herf="product.php" class="btn"> Lihat Produk </a>
                        </div>
                        <div class="image">
                            <img src="images/new1.png" width="550" height="490" >
                        </div>
                    </div>

                    <div class="swiper-slide slide">
                        <div class="image">
                            <img src="images/new.png" width="570" height="520" >
                        </div>
                        <div class="content">
                            <h2>Kandungan Alkohol ???? </h2><br>
                            <p1>Kandungan alkohol yang buruk, dapat menghilangkan minyak alami pada
                                kulit, berbahaya bagi pelindung kulit, membuat pori-pori semakin besar, dan dapat 
                                menjadikan kulit kering bahkan sensitif.
                                Jika memang kamu tetap ingun memaki produk dengan kandungan alkohol yang berbahaya,
                                sebaiknya jangan digunkana setiap hari yah.. Cukup pakai
                                seminggu dua kali saja !
                            </p1><br>

                            <a herf="product.php" class="btn"> Lihat Produk </a>
                        </div>
                        
                    </div>

                    <div class="swiper-slide slide">
                    <div class="content">
                            <h2>Information ! </h2><br>
                            <p1>Show Your Skin hadir untuk menyediakan informasi tentang 
                                dunia perskincare-an khusus untuk mu loh. Jangan sampai kamu membuat kulit menjadi rusak
                                karena tidak mengetahui dengan detail jenis kulitmu sendiri yah..
                            </p1><br>

                            <a herf="product.php" class="btn"> Lihat Produk </a>
                        </div>
                        <div class="image">
                            <img src="images/new2.png" width="550" height="470" >
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="container">
        <h1 class="title">Cek Tipe Kulit Mu</h1>
            <div class="info">
                <div class="normal"><img src="images/normal_1.jpg" width="200px" height="270px" ></div>   
                <div class="kering"><img src="images/kering_1.jpg"  width="200x" height="270px" ></div>   
                <div class="kombi"><img src="images/kombi_1.jpg"  width="200x" height="270px" ></div>   
                <div class="minyak"><img src="images/minyak_1.jpg"  width="210px" height="278px" ></div> 
                <div class="sensitif"><img src="images/sensitif.jpg"  width="200x" height="270px" ></div> 
            </div>

        <h4 class="title">Brands</h4>
            <div class="info">
                <div class="user"><img src="images/avoskin.jpeg" width="110rem" height="110rem" alt=""></div>
                    <div class="user1"><img src="images/azarine.jpeg" width="110rem" height="110rem" alt=""></div>
                    <div class="user2"><img src="images/skintifc.jpeg" width="110rem" height="110rem" alt=""></div>
                    <div class="user3"><img src="images/something.jpeg" width="110rem" height="110rem" alt=""></div>
                    <div class="user4"><img src="images/safi.jpeg" width="110rem" height="110rem" alt=""></div>
                    <div class="user5"><img src="images/whitelab.jpeg" width="110rem" height="110rem" alt=""></div>
                    <div class="user6"><img src="images/npure.jpeg" width="110rem" height="110rem" alt=""></div>
                </div>
            </div>

        <h4 class="title">New Products</h4>
            <div class="info">
                <a href="product.php" class="box">
                    <img src="images/somethinc.jpg"  height="270px" width="280px" alt="">
                    <h5>Somethinc</h5>
                </a>
                <a href="product.php" class="box">
                    <img src="images/avoskin.jpg"  height="270px" width="210px" alt="">
                    <h5>Avoskin</h5>
                </a>
                <a href="product.php" class="box">
                    <img src="images/gambar3.jpeg" height="270px" width="280px" alt="">
                    <h5>Skintific</h5>
                </a>
                <a href="product.php" class="box">
                    <img src="images/gambar4.jpeg"  height="270px" width="270px" alt="">
                    <h5>NPure</h5>
                </a>
            </div>
                <div class="more-btn">
                    <br><br><a herf="product.php" class="btn"> Lihat Semua </a>
                </div>
            </div>
        </section>
        

        <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Information</h3>
                <a href="#">About </a>
                <a href="#">Contact </a>
                <a href="#">Review</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div class="box">
                <h3>Payment Options</h3>
                <img src="images/payment.png" alt="">
            </div>
            <div class="box">
                <h3>Social Media</h3>
                <img src="images/instagram.png" alt="" width="30px">
                <img src="images/facebook.png" alt="" width="30px">
                <img src="images/twitter.png" alt="" width="30px">
            </div>
            <div class="box">
                <h3>Customer care</h3>
                <a href="#">+62-856342091</a>
                <a href="#">ShowYourSkin@gmail.com</a>
                <a href="#">Jakarta, Indonesia</a>
            </div>
        </div>
        <div class="credit"> created by <span> kelompok web project </span> </div>

    </section>





    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <script>
        var swiper = new Swiper(".hero-slider", {
            loop:true,
            grabCursor: true,
            effect: "flip",
            pagination: {
                el: ".swiper-pagination",
                clickable:true,
            },
        });
    </script>
    </body>
</html>
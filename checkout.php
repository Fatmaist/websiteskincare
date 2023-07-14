<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbnm = "websiteku";
    $conn = mysqli_connect ($host, $user, $pass, $dbnm);

    if(isset($_POST['submit'])){
        $Nama = $_POST['Nama'];
        $Telepon = $_POST['Telepon'];
        $Alamat = $_POST['Alamat'];
        $Detail_Pesanan = $_POST['Detail_Pesanan'];
        $Ekspedisi = $_POST['Ekspedisi'];
        $Ongkir = $_POST['Ongkir'];
        $Metode_Bayar = $_POST['Metode_Bayar'];
        $sql = mysqli_query($conn, "INSERT INTO pesanan VALUES ('$Nama', '$Telepon', '$Alamat', '$Detail_Pesanan');");
        header('Location: payment.php');
    }
?>

<?php
    require_once ('cartshop.php');
?>

<html>
    <head>
    <link rel="stylesheet" href="css/checkout.css">
    </head>
    <body>
    <br><br><br>
    <div class="pesan">
        <form action = "" method="POST" align="center">
            <h2><b>FORM PEMESANAN</b></h2>
            Nama Penerima : <input type="text" name="Nama"> <br><br>
            Telepon : <input type="text" name="Telepon"> <br><br>
            Alamat : <input type="text" name="Alamat"> <br><br>
            Detail Pesanan : <textarea rows="3" cols="20" wrap="physical" name="Detail_Pesanan"></textarea> <br><br>
            <input type="submit" class="btn btn-primary" name="submit" Value="Checkout">
        </form>
    </div>
    </body>
</html>

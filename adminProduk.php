<?php
require 'functions.php';
session_start();

require_once ('php/CreateDb.php');
require_once ('php/componentEdit.php');
require_once ("php/get.php");

// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Produk Sudah Ada')</script>";
            echo "<script>window.location = 'buyerProduk.php'</script>";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CoUrgent | Produk</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/produk.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">CoUrgent</a></div>
            <div class="menu">
                <ul>
                    <li><a href="adminHome.php">Profil</a></li>
                    <li><a href="adminEdit.php">Update</a></li>
                    <li><a href="adminProduk.php">Produk</a></li> 
                    <li><a href="landing.php" class="tbl-hijau">Log out</a></li>
                                    
                </ul>
            </div>
        </div>
    </nav>

<div class="container">

<a href="adminUpload.php">Tambah Produk</a><br/><br/>
 
    <table class="table table-bordered table-striped" width='100%' border=1>

        <tr>
            <th>Nama Produk</th> <th>Nama Apotek</th> <th>Harga</th> <th>Keterangan</th> <th>Alamat</th> <th>kode</th> <th>pukul</th> <th>tanggal</th>
        </tr>
        <?php  
        $result = $database->getData();
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['product_name']."</td>";
            echo "<td>".$user_data['apotek_name']."</td>";
            echo "<td>".$user_data['product_price']."</td>";
            echo "<td>".$user_data['ket']."</td>";
            echo "<td>".$user_data['alamat']."</td>";
            echo "<td>".$user_data['kode']."</td>";
            echo "<td>".$user_data['pukul']."</td>";
            echo "<td>".$user_data['tanggal']."</td>";
            echo "<td><a href='adminEdit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
         }
        ?>
    </table>
</div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>CoUrgent</h3>
                    <p>Website penyedia produk kesehatan dimasa pandemi</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Dibangun untuk memenuhi matakuliah Rekaya Perangkat lunak</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl. Sultan iskandar muda, Aceh besar,</p>
                    <p>Kode Pos: 1234</p>
                </div>
                <div class="footer-section">
                    <h3>Sosial</h3>
                    <p><b>YouTube: </b> CoUrgents</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>CoUrgent</b> All Right Reserve
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php

include 'buyerConfig.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:buyerLog.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:buyerLog.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CoUrgent | Profil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/produk.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/buyyer.css">
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<nav>
    <div class="wrapper">
        <div class="logo"><a href="">CoUrgent</a></div>
        <div class="menu">
            <ul>
                <li><a href="buyerHome.php">Profil</a></li>
                <li><a href="buyerProduk.php">Produk</a></li>  
                <li><a href="buyerKeranjang.php">Keranjang</a></li>
                <li><a href="landing.php" class="tbl-hijau">Log out</a></li>
                                
            </ul>
        </div>
    </div>
</nav>

<div class="container bg-white">

   <div class="profile">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `pembeli_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <h3><?php echo $fetch['email']; ?></h3>
      <a href="buyerUpdate_profile.php" class="btn">Perbaharui profil</a>
   </div>

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
                    <p>Dibangun untuk memenuhi matakuliah Rekayasa Perangkat lunak</p>
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
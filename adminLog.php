<?php

include 'adminConfig.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `admin_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      header('location:adminHome.php');
   }else{
      $message[] = 'Email atau password salah!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/buyyer.css">
   <title>Masuk</title>
  

</head>
<style>
        body{
            background-image: url(img/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
        .title{
            text-align: center;
            font-size: 2.5em;
            color: #000;
        }
         
    </style>
<body>

<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>masuk CoUrgent</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="Email" class="box" required>
      <input type="password" name="password" placeholder="Password" class="box" required>
      <input type="submit" name="submit" value="Masuk" class="btn">
      <p>Belum punya akun? <a href="adminReg.php">Daftar Sekarang</a></p>
   </form>

</div>

    
</body>
</html>
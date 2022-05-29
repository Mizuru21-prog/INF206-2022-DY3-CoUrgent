<?php

include 'adminConfig.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $code = mysqli_real_escape_string($conn, $_POST['code']);
   $bio = mysqli_real_escape_string($conn, $_POST['bio']);

   $select = mysqli_query($conn, "SELECT * FROM `admin_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'Akun Sudah Terdaftar'; 
   }else{
      if($pass != $cpass){
         $message[] = 'konfirmasi password tidak cocok!';
      }elseif($image_size > 2000000){
         $message[] = 'Ukuran Gambar terlalu besar!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `admin_form`(name, email, password, image, address, code, bio) VALUES('$name', '$email', '$pass', '$image', '$address', '$code', '$bio')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Pendaftaran Akun Berhasil!';
            header('location:adminLog.php');
         }else{
            $message[] = 'Pendaftaran Akun Gagal!';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/buyyer.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Daftar Sekarang</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="Masukkan username" class="box" required>
      <input type="email" name="email" placeholder="Masukkan email" class="box" required>
      <input type="text" name="address" placeholder="Masukkan alamat" class="box" required>
      <input type="text" name="code" placeholder="Masukkan kode" class="box" required>
      <input type="text" name="bio" placeholder="Masukkan bio" class="box" required>
      <input type="password" name="password" placeholder="enter password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm password" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="Daftar" class="btn">
      <p>Sudah memiliki akun? <a href="adminLog.php">Masuk</a></p>
   </form>

</div>

</body>
</html>
<?php

include 'adminConfig.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `admin_form` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'kata sandi lama tidak cocok!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'konfirmasi kata sandi tidak cocok!';
      }else{
         mysqli_query($conn, "UPDATE `admin_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'password berhasil di update!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'ukuran gambar terlalu besar';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `admin_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'gambar berhasil di update!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CoUrgent | Perbaharui Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
                <li><a href="adminHome.php">Profil</a></li> 
                <li><a href="adminUpload.php">Upload</a></li>
                <li><a href="adminProduk.php">Produk</a></li> 
                <li><a href="landing.php" class="tbl-hijau">Log out</a></li>
                                
            </ul>
        </div>
    </div>
</nav>
   
<div class="update-profile bg-white">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `admin_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php
         if($fetch['image'] == ''){
            echo '<img src="img/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>username :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>kode :</span>
            <input type="text" name="update_code" value="<?php echo $fetch['code']; ?>" class="box">
            <span>email :</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <span>alamat :</span>
            <input type="text" name="update_alamat" value="<?php echo $fetch['address']; ?>" class="box">
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>password lama :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>password baru :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>konfirmasi password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
            <span>update foto :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
         </div>
      </div>
      <input type="submit" value="update profile" name="update_profile" class="btn">
      <a href="adminHome.php" class="delete-btn">Kembali</a>
   </form>
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
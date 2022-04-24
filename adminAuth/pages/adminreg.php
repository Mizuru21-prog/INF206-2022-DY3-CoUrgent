<?php
require '../dbAdmin.php';
if( isset($_POST["register"])){
    if(register($_POST)>0){
        echo "<script>
            alert('Berhasil menambahkan user baru!');
              </script>";
        header("location: adminlog.php");
        exit;
    }
    else{
        echo mysqli_error($conn);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/admin.css">
    <title>CoUrgent</title>

</head>
<body>
    
    <section class="cont">
        <div class="pict-left">
            <img src="../../img/Register&LogPict.png" alt="loading" width="91%">
        </div>
        <div class="container">
            <div class="container-big">
                
                <p>Welcome <br> <span style="font-weight: bold;">Sign Up your new account</span></p>
            
                <form class="col-7" action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm">
                    </div>  
                    <button type="submit" class="btn btn-success" name="register">Sign Up Now</button>
                    <a class="link text-primary" href="adminlog.php">or Login as Admin</a>
                </form>                
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


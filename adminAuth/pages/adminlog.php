<?php
require '../dbAdmin.php';

if( isset($_POST["login"])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM admin_regis WHERE email = '$email'");
    // cek email
    if(mysqli_num_rows($result) === 1){
        //cek pass
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            header("location: ../../Upload.php");
            exit;
        }
    }

    $error = true;

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
                
                <p>Welcome <br> <span style="font-weight: bold;">Login as Staff</span></p>
                <form class="col-7" action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" autofocus required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                        <button type="submit" class="btn btn-success" name="login">Login as Staff</button>
                        <a class="text-primary" href="adminreg.php">Not have an account?</a>
                </form>                
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


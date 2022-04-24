<?php
/* nama server kita */
$servername = "localhost";

/* nama database kita */
$database = "INF206K3"; 

/* nama user yang terdaftar pada database (default: root) */
$username = "courgent";

/* password yang terdaftar pada database (default : "") */ 
$password = "Informatika2022!"; 

/* membuat koneksi */
$conn = mysqli_connect($servername, $username, $password, $database);

/* mengecek koneksi */
if (!$conn) {
    die("Maaf koneksi anda gagal : " . mysqli_connect_error());
}

function register($data){
    global $conn;

    $name = $data["name"];
    $email = $data["email"];
    $password = $data["password"];
    $confirm = $data["confirm"];

    //cek username sudah ada
    $result = mysqli_query($conn, "SELECT * FROM admin_regis WHERE email='$email'");
    if(mysqli_fetch_assoc($result))
    {
        echo "<script>
                alert('email sudah terdaftar');
            </script>";
        return false;
    }
    //cek confirm
    if( $password !== $confirm){
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
             </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO admin_regis (name, email, password) VALUES ('$name', '$email', '$password')");

    return mysqli_affected_rows($conn);
}

?>

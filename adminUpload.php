<?php
include "adminConfig.php";


require 'functions.php';
session_start();

// if(isset($_SESSION['submit']) != true){ 
//     header("Location: adminHome.php");
// }
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["kirim"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'adminProduk.php';
			</script>
		";
	} else {
        
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'adminUpload.php';
			</script>
		";
	}


}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoUrgent | Produk</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
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

    

    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Upload data produk
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data"  >
                    <div class="mb-3 row">
                        <label for="produk" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                        <input size="100" autofocus placeholder="Masukkan nama produk" autocomplete="off" class="form-control  " style="width:100%; " type="text" name="nama_produk" id="nama_produk" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="apotek" class="col-sm-2 col-form-label">Nama Apotek</label>
                        <div class="col-sm-10">
                        <input size="40" autofocus placeholder="Masukkan nama apotek" autocomplete="off" class="form-control  " style="width:100%; " type="text" name="nama_apotek" id="nama_apotek" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                        <input size="40" autofocus placeholder="Masukkan keterangan" autocomplete="off" class="form-control  " style="width:100%; " type="text" name="ket" id="ket" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                        <input size="40" autofocus placeholder="Masukkan harga" autocomplete="off" class="form-control  " style="width:100%; " type="text" name="harga" id="harga" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input size="40" autofocus placeholder="Masukkan alamat" autocomplete="off" class="form-control  " style="width:100%; " type="text" name="alamat" id="alamat" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pukul" class="col-sm-2 col-form-label">Pukul</label>
                        <div class="col-sm-10">
                        <input size="40" autofocus placeholder="Masukkan pukul " autocomplete="off" class="form-control  " style="width:100%; " type="text" name="pukul" id="pukul" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                        <input size="40" autofocus placeholder="Masukkan tanggal" autocomplete="off" class="form-control  " style="width:100%; " type="text" name="tanggal" id="tanggal" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                        <div class="col-sm-10">
                        <input size="40" autofocus placeholder="Masukkan kode" autocomplete="off" class="form-control  " style="width:100%; " type="text" name="kode" id="kode" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="formFile" class="form-label">Upload Gambar Produk</label>
                            <input class="form-control" type="file" name= 'gambar' id="formFile">
                    </div>
                        <div class="col-12">
                            <button type="submit" name="kirim" value="Simpan Data" class="btn btn-primary">Simpan Data</button>
                            <!-- <input type="submit" name="kirim" value="Simpan Data" class="btn btn-primary" /> -->
                        </div>
                </form>
            </div>
            <?php var_dump($_POST);?>
        </div>
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


</body>

</html>

<?php 
$conn = mysqli_connect("localhost", "root", "", "productdb");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;


	$nama_produk = htmlspecialchars($data["nama_produk"]);
	$nama_apotek = htmlspecialchars($data["nama_apotek"]);
	$ket = htmlspecialchars($data["ket"]);
	$harga = htmlspecialchars($data["harga"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$pukul = htmlspecialchars($data["pukul"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	$kode = htmlspecialchars($data["kode"]);
   
	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}
    // var_dump($_FILES);
    // die;

	$query = "INSERT INTO producttb
				VALUES
			  ('', '$nama_produk', '$nama_apotek','$harga', '$ket', '$alamat', '$kode','$pukul', '$tanggal',  '$gambar')
			";

	mysqli_query($conn, $query);
    // var_dump(mysqli_affected_rows($conn));
    // var_dump($query);
    // var_dump($conn);
    
    // die;

	return mysqli_affected_rows($conn);
}
function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
   	$folder = 'img/'.$namaFile;
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    // var_dump($namaFileBaru);
	return $namaFileBaru;
}



?>

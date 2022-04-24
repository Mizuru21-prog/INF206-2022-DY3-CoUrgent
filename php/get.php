<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'Home':
				include "/CoUrgent/Home.php";
				break;
			case 'Produk':
				include "/CoUrgent/Produk.php";
				break;
			case 'Upload':
				include "/CoUrgent/Upload.php";
				break;
			case 'Keranjang':
				include "/CoUrgent/Keranjang.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	
    }
 
	 ?>
<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'Home':
				include "buyerHome.php";
			case 'Produk':
				include "buyerProduk.php";
				break;
			case 'ProdukB':
				include "buyerProduk.php";
				break;
			case 'Upload':
				include "adminUpload.php";
				break;
			case 'Keranjang':
				include "buyerKeranjang.php";
				break;
			case 'Log out':
				include "landing.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	
    }

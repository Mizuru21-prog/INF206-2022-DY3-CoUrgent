<?php

function component($product_name, $apotek_name, $product_price, $product_image, $id, $ket, $alamat, $kode, $pukul, $tanggal){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"adminProduk.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$product_image\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$product_name <br>
                            <span class=\"price\">Rp$product_price</span> <br> <br>
                            </h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\"> 
                               $ket
                            </p>
                            <p class=\"card-text\">
                               Alamat: $alamat
                            </p>
                            <p class=\"card-text\">
                                Kode Apotek: $kode
                            </p>
                            <h6>
                                <small><s class=\"text-secondary\">Jadwal: $pukul, $tanggal</s></small> <br>
                            </h6>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\"> edit <i </i></button>
                            <button type=\"submit\" class=\"btn btn-danger my-3\" name=\"add\"> Hapus </i></button>
                            <input type='hidden' name='product_id' value='$id'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($product_image, $product_name, $apotek_name, $product_price, $id, $ket, $alamat, $kode, $pukul, $tanggal){
    $element = "
    
    <form action=\"adminEdit.php?action=remove&id=$id\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$product_image alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h6 class=\"pt-2\">$product_name</h6>
                                <h6 class=\"pt-2\">Rp$product_price</h6>
                                <small class=\"text-secondary\">Apotek: $apotek_name</small> <br>
                                <small class=\"text-secondary\">Alamat: $alamat</small> <br>
                                <small class=\"text-secondary\">Deskripsi: $ket</small> <br>
                                <h6 class=\"pt-2\">$pukul, $tanggal</h6>
                                <button type=\"submit\" class=\"btn btn-warning\">Simpan untuk nanti</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Hapus</button>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}


















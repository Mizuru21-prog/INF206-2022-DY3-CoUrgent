<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CoUrgent | Home</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/produk.css">
    <!-- font awesome--> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
  
    <!-- bootstrap cdn--> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">CoUrgent</a></div>
            <div class="menu">
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="Produk.php">Produk</a></li>
                    <li><a href="Upload.php">Upload</a></li>  
                    <li><a href="Keranjang.php">Keranjang</a></li>
                    <li><a href="" class="tbl-hijau">Log out</a></li>
                                    
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <div class="row text-center py-5">
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
          <form action="home.blade.php" method="post">
              <div class="card shadow">
                  <div>
                      <img src="./img/chat.png" alt="Image1" class="img-fluid card-img-top">
                  </div>
                  <div class="card-body">
                      <button type="submit" class="btn btn-warning my-3"name="add">Obrolan</button>
                  </div>
              </div>            
          </form>
      </div>
      <div class="col-md-3 col-sm-6 my-3 my-md-0">
      <form action="home.blade.php" method="post">
              <div class="card shadow">
                  <div>
                      <img src="./img/pesanan.png" alt="Image2" class="img-fluid card-img-top">
                  </div>
                  <div class="card-body">
                      <button type="submit" class="btn btn-warning my-3"name="add">Pesanan</button>
                  </div>
              </div>            
          </form>
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
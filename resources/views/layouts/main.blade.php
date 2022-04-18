<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CoUrgent | {{ $title }}</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">CoUrgent</a></div>
            <div class="menu">
                <ul>
                    <li><a href="/Home">Home</a></li>
                    <li><a href="/Produk">Produk</a></li> 
                    <li><a href="/Struk">Struk</a></li>
                    <li><a href="/Help">Help</a></li>
                    <li><a href="" class="tbl-hijau">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('container')
    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>CoUrgent</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, officia?</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem, officia?</p>
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
            &copy; 2022. <b>CoUrgents</b> All Right Reserve
        </div>
    </div>
</body>
</html>
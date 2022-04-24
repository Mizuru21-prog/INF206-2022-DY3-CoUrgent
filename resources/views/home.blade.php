@extends('layouts.main')
    @section('container')
<h4>Selamat Datang <b>{{Auth::user()->name}}</b></h4>
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

    @endsection

@extends('Admin.layout')
    @section('container')
        
        <div class="container">
            <div class="container-big">
                
                <p>Welcome <br> <span style="font-weight: bold;">Sign Up your new account</span></p>
            
                <form class="col-7">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fullName">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword2" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="inputPassword2">
                    </div>
                    <button type="submit" class="btn btn-success">Sign Up Now</button>
                    <a class="link text-primary" href="#">or Login as Admin</a>
                </form>                
            </div>
        </div>
        

    @endsection

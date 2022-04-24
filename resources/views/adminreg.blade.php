@extends('Admin.layout')
    @section('container')
        
        <div class="container">
            <div class="container-big">
                
                <p>Welcome <br> <span style="font-weight: bold;">Sign Up your new account</span></p>
            
                <form class="col-7" action="{{route('actionRegister')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword2" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm">
                    </div>  
                    <button type="submit" class="btn btn-success">Sign Up Now</button>
                    <a class="link text-primary" href="{{route('adminlog')}}">or Login as Admin</a>
                </form>                
            </div>
        </div>
        

    @endsection

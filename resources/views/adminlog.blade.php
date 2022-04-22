@extends('Admin.layout')
    @section('container')
    <div class="container">
            <div class="container-big">
                
                <p>Welcome <br> <span style="font-weight: bold;">Login as Staff</span></p>
            
                <form class="col-7">
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
                        <button type="submit" class="btn btn-success">Login as Staff</button>
                        <a class="text-primary" href="#">Not have an account?</a>
                </form>                
            </div>
        </div>
    @endsection
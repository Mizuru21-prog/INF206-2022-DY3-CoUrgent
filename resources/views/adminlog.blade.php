@extends('Admin.layout')
    @section('container')
    <div class="container">
            <div class="container-big">
                
                <p>Welcome <br> <span style="font-weight: bold;">Login as Staff</span></p>
                @if(session('error'))
                    <div class="alert alert-danger">
                        <b>Opps!</b> {{session('error')}}
                    </div>
                @endif

                <form class="col-7" action="{{route('actionLogin')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" autofocus required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                        <button type="submit" class="btn btn-success">Login as Staff</button>
                        <a class="text-primary" href="{{route('adminreg')}}">Not have an account?</a>
                </form>                
            </div>
        </div>
    @endsection
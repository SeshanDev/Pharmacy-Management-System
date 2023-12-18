@extends('Layout.app')

@section('login')
<div>
    <div class="card-header text-center">
        <img src="../image/cover-1.png">
    </div>

    <div class="col-5" style="margin-left: 50%">
        <div class="card bg-success text-white">
            <div class="card-body">
                <a href="{{url('login')}}" style="color:linen; text-decoration: none;"><h1 class="card-text text-center">LOGIN</h1></a>
            </div>
        </div>
    </div>
    <div class="col-5" style="margin-left: 10%">
        <div class="card bg-danger text-white">
            <div class="card-body">
                <a href="{{url('register')}}" style="color:linen; text-decoration: none;"><h1 class="card-text text-center">REGISTER</h1></a>
            </div>
        </div>
    </div>

    
</div>

@endsection
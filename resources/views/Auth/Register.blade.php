@extends('Layout.app')

@section('register')
<body style="background-image: url(../image/cover_register.jpg); height:auto;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-lg-4 col-lg-8 mx-auto mt-3">
                <div class="card" style="background-color: rgb(255, 174, 174)">
                    <div class="card-header text-center">
                        <h1 class="text-uppercase display-4 font-weight-bold" style="color: red">REGISTRATION</h1>

                    </div>
                    <div class="card-header text-center">
                        <img src="../image/cover_login.png">
                    </div>

                    <div class="card-body">
                        <form action="{{ url('store') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for=""><b>Name </b></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Ex: Seshan Nethmika" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for=""><b>Email </b></label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Ex: example@gmail.com" name='email' value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Address"><b>Address</b></label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="Address" placeholder="Ex: 239/3, Moratuwahena Rd, Athurugiriya." rows="3" name="address"></textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>


                            <div class="form-row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for=""><b>Contact no</b></label>
                                        <input type="text" class="form-control" placeholder="Ex: +94784700850" name="mobile"
                                            value="{{ old('mobile') }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for=""><b>Date of Birth </b> </label>
                                        <input type="date" class="form-control @error('dob') is-invalid @enderror"
                                            name='dob' value="{{ old('dob') }}">
                                        @error('dob')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                               
                            </div>

                            <div class="form-row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for=""><b>Password </b></label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for=""><b> confirm Password </b></span></label>
                                        <input type="password" class="form-control" placeholder="Confirm Password"
                                            name="password_confirmation">
                                    </div>
                                </div>
                            </div>

                           

                            <div class="text-center">
                                <div class="form-group">
                                    <span>Already have an account? <a href="{{ url('login') }}">Login Here</a></span>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-external-link mr-1"
                                            aria-hidden="true"></i> Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

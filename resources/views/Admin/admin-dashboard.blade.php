@extends('Admin.home')

@section('bar')
    <span class="text-muted float-right">Home / Dashboard</span>
@endsection

@section('connect')
@if (Session::get('message'))
        <div class="row">
            <div class="col-12 col-lg-6 ml-lg-auto">
                <div class="alert alert-success alert-dismissible fade show mt-2 " role="alert" id="errorAlert">
                    <strong>{{ Session::get('message') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-12 col-lg-6 mb-2 ">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    
                    <p class="card-text">New Added Prescription</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="{{ url('precribtion-list') }}" class="text-white"><span>More Info <i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 mb-2 ">
            <div class="card text-white" style="background-color: #2980b9">
                <div class="card-body">
                    <p class="card-text">Available Medicines</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="{{url('medicine-list')}}" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

       
    </div>


    <div class="row mt-lg-3">
        <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            <div class="card text-white" style="background-color: #e67e22">
                <div class="card-body">
                    <p class="card-text">Pending Prescription</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="{{ url('pending') }}" class="text-white"><span>More Info <i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 mb-3 mb-lg-0">
            <div class="card text-white" style="background-color: #ff0000">
                <div class="card-body">
                    <p class="card-text">Reject Prescription</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="{{url('reject')}}" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card text-white" style="background-color: #18a513">
                <div class="card-body">
                    <p class="card-text">Accept Prescription</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="{{url('accept')}}" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('alertHide')
    $('#errorAlert').hide(4000).slidUp(400);
@endsection


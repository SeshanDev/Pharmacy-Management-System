@extends('user.home')

@section('bar')
    <span class="float-right">Home / Dashboard</span>
@endsection
<body>
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
    <div class="row" >
        <div class="col">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <p class="card-text">Total Prescription</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="{{ url('precribtion-history') }}" class="text-white"><span>More Info <i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <p class="card-text">Prepared Quotation</p>
                </div>

                <div class="card-footer text-center font-weight-bold">
                    <a href="{{url('prepared-quotation')}}" class="text-white"><span>More Info <i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('alertHide')
    $('#errorAlert').hide(4000).slidUp(400);
@endsection
</body>
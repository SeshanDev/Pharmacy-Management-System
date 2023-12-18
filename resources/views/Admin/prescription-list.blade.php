@extends('Admin.home')

@section('bar')
    <span class="text-muted float-right">Home / New Prescription</span>
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
    <div class="card">
        <div class="card-header font-weight-bold">
            New Prescription
            <a href="{{ url('admin-dashboard') }}" class="btn btn-primary float-right">Back</a>
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Note</th>
                    <th scope="col">Delivery address</th>
                    <th scope="col">Action</th>
                </thead>

                @php $i=1 @endphp

                <tbody>
                    <tr>
                        @forelse ($precription as $row)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $row->user->name }}</td>
                        <td>{{ $row->note }}</td>
                        <td>{{ $row->address }}</td>
                        <td>
                            @if ($row->confirm == 0)
                                <a href="{{ url('uploaded-prescriptions') }}/{{ $row->id }}"
                                    class="btn btn-primary">Create Quotation</a>
                                    <img src="https://sahussaintu.files.wordpress.com/2018/04/newgif5.gif" alt="" width="60" height="60">
                            @elseif($row->confirm == 1)
                                <a href="{{ url('uploaded-prescriptions') }}/{{ $row->id }}"
                                    class="btn btn-success">Update Quotation</a>
                            @endif
                        </td>
                    </tr>
                @empty
                    <td colspan="5" class="text-danger text-center font-weight-bold">No Data Record</td>
                    @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('alertHide')
    $('#errorAlert').hide(4000).slidUp(400);
@endsection


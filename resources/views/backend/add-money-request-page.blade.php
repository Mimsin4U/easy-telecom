@extends('backend.master')
@section('title','Add Money Requests')
@section('content')
    @include('notify')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Money Requests</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Payment Methood</th>
                            <th>Money Sent From</th>
                            <th>Transaction ID</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($addMoneys as $addMoney)
                            <tr>
                                <td>{{$addMoney->client->name}}</td>
                                <td>{{$addMoney->payment_method}}</td>
                                <td>{{$addMoney->sent_from}}</td>
                                <td>{{$addMoney->transaction_id}}</td>
                                <td>{{$addMoney->amount}}</td>
                                <td>{{$addMoney->status == 0 ? 'Pending' : 'Added'}}</td>
                                <td>
                                    @if ($addMoney->status == 0)
                                        <a href="{{route('approveAddMoney',$addMoney->id)}}" class="btn btn-danger">Approve</a>
                                    @else
                                        <h5 class="text-success">Added</h5>
                                    @endif
                                    
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

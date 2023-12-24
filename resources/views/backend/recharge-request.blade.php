@extends('backend.master')
@section('title','Recharge Requests')
@section('content')
@include('notify')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Recharge Requests</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Operator</th>
                        <th>Mobile No</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recharges as $recharge)
                    <tr>
                        <td>{{$recharge->client->name}}</td>
                        <td>{{$recharge->operator}}</td>
                        <td>{{$recharge->mobile_no}}</td>
                        <td>{{$recharge->amount}}</td>
                        <td>{{$recharge->status == 0 ? 'Pending' : 'Recharged'}}</td>
                        <td>
                            @if ($recharge->status == 0)
                            <a href="{{route('approveRecharge',$recharge->id)}}" class="btn btn-danger">Recharge</a>
                            @else
                            <h5 class="text-success">Recharged</h5>
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

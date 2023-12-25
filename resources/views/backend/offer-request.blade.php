@extends('backend.master')
@section('title','Offer Requests')
@section('content')
@include('notify')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Offer Requests</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Offer</th>
                        <th>Mobile No</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offerRequests as $offerRequest)
                    <tr>
                        <td>{{$offerRequest->client->name}}</td>
                        <td>{{$offerRequest->offer->title}}</td>
                        <td>{{$offerRequest->mobile_no}}</td>
                        <td>{{$offerRequest->status == 0 ? 'Pending' : 'offer Sent'}}</td>
                        <td>
                            @if ($offerRequest->status == 0)
                            <a href="{{route('approveOfferRequest',$offerRequest->id)}}" class="btn btn-danger">Send</a>
                            @else
                            <h5 class="text-success">Sent</h5>
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

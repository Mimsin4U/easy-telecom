@extends('backend.master')
@section('title','Offer Requests')
@section('content')
@include('notify')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Our Offers</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Offer Title</th>
                        <th>Original Price</th>
                        <th>Discount Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($offers as $offer)
                    <tr>
                        <td>{{$offer->title}}</td>
                        <td>{{$offer->original_price}}</td>
                        <td>{{$offer->discount_price}}</td>
                        <td>{{$offer->status == 1 ? 'Active' : 'Inactive'}}</td>
                        <td>
                            @if ($offer->status == 0)
                            <a href="{{route('changeOfferStatus',$offer->id)}}" class="btn btn-success">Show</a>
                            @else
                            <a href="{{route('changeOfferStatus',$offer->id)}}" class="btn btn-warning">Hide</a>
                            @endif
                            <a href="{{route('deleteOffer',$offer->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

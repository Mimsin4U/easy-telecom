@extends('frontend.master')

@section('content')
    <div class="maincontent-area">
        <div>
            <h2 class="text-center">My Add Money Requests</h2>
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <table class="table">
                            <thead class="bg-success">
                                <tr>
                                    <th scope="col">Payment Method</th>
                                    <th scope="col">Sent From</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider bg-primary">
                                @foreach ($addMoneys as $addMoney)
                                <tr>
                                    <td>{{$addMoney->payment_method}}</td>
                                    <td>{{$addMoney->sent_from}}</td>
                                    <td>{{$addMoney->transaction_id}}</td>
                                    <td>{{$addMoney->amount}}</td>
                                    <td>{{$addMoney->status == 0 ? 'Pending' : 'Added'}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 25px">
            <h2 class="text-center">My Rechargs</h2>
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <table class="table">
                            <thead class="bg-success">
                                <tr>
                                    <th>Operator</th>
                                    <th>Mobile No</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider bg-primary">
                                @foreach ($recharges as $recharge)
                                <tr>
                                    <td>{{$recharge->operator}}</td>
                                    <td>{{$recharge->mobile_no}}</td>
                                    <td>{{$recharge->amount}}</td>
                                    <td>{{$recharge->status == 0 ? 'Pending' : 'Recharged'}}</td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 25px">
            <h2 class="text-center">My Offers</h2>
            <div class="container">
                <div class="row ">
                    <div class="col-md-12">
                        <table class="table ">
                            <thead class="bg-success">
                                <tr>
                                    <th>Offer</th>
                                    <th>Mobile No</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider bg-primary">
                                @foreach ($offerRequests as $offerRequest)
                                <tr>
                                    <td>{{$offerRequest->offer->title}}</td>
                                    <td>{{$offerRequest->mobile_no}}</td>
                                    <td>{{$offerRequest->status == 0 ? 'Pending' : 'Offer Recived'}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div> <!-- End main content area -->
@endsection

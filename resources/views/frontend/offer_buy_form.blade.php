@extends('frontend.master')

@section('content')
<div class="container">
  <div class="fff">
    <h1>Make a Purchase</h1>
    <h3>{{$offer->title}}</h3>
    <form action="{{route('client.perchaseOffer')}}" class="purchase-form" method="POST">
      @csrf
      <input type="hidden" name="offer_id" value="{{$offer->id}}">
      <div class="form-group">
        <label for="phoneNumber">Mobile Number:</label>
        <input type="tel" id="phoneNumber" name="mobile_no" placeholder="Enter phone number" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>
      </div>

      <button type="submit" class="purchase-btn">Purchase Now</button>
    </form>
  </div>
</div>
@endsection

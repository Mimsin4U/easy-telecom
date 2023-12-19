@extends('frontend.master')

@section('content')

<div class="container">
  <div class="first">
    <h1>Make a Purchase</h1>
    <form action="#" class="purchase-form">
      <div class="form-group">
        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" required>
      </div>

      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
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
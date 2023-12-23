@extends('frontend.master')

@section('addmoney')
<div class="container">
  <div class="first">
    <h1>Add Money to Your Account</h1>
    
    <dl>
      <dt style="color:rgb(128, 128, 128);">Our Send Money Number :</dt>
      <dt style="color:Tomato;">Bkash- 01798-480823</dt>
      <dt style="color:Tomato;">Rocket- 01798-4808234</dt>
      <dt style="color:Tomato;">Nagad- 01798-480823</dt>
      <h1></h1>
      <h1></h1>
    <form action="{{route('client.addMoneyRequest')}}" class="add-money-form" method="POST">
      @csrf
      <div class="form-group">
        <label for="operator">Select Payment Method:</label>
        <select id="operator" name="payment_method" required>
          <option value="" disabled selected>Select Payment Method</option>
          <option value="Bkash">Bkash</option>
          <option value="Rocket">Rocket</option>
          <option value="Nagad">Nagad</option>
        </select>
      </div>
      <div class="form-group">
        <label for="senderNumber">Give Sender Number:</label>
        <input type="text" id="senderNumber" name="sent_from" placeholder="Enter sender number" required min="1">
      </div>

      <div class="form-group">
        <label for="transactionID">Transaction ID:</label>
        <input type="text" id="transactionID" name="transaction_id" placeholder="Enter Transaction ID" required min="1">
      </div>

      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" placeholder="Enter amount" required min="1">
      </div>

      <div class="form-group">
        <label for="pin">Password:</label>
        <input type="text"  name="password" placeholder="Confirm Your Password" required>
      </div>

      <button type="submit" class="btn">Add Money</button>
    </form>
  </div>
</div> 

@endsection

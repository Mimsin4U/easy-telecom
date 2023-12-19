@extends('frontend.master')

@section('addmoney')

<div class="container">
  <div class="first">
    <h1>Add Money to Your Account</h1>
    <dl>
      <dt style="color:Tomato;">Send Money Number Below:</dt>
      <dt style="color:Tomato;">Bkash- 01798-480823</dt>
      <dt style="color:Tomato;">Rocket- 01798-4808234</dt>
      <dt style="color:Tomato;">Nagad- 01798-480823</dt>
      <h1></h1>
      <h1></h1>
    <form action="#" class="add-money-form">
      <div class="form-group">
        <label for="senderNumber">Give Sender Number:</label>
        <input type="text" id="senderNumber" name="senderNumber" placeholder="Enter sender number" required>
      </div>

      <div class="form-group">
        <label for="transactionID">Transaction ID:</label>
        <input type="text" id="transactionID" name="transactionID" placeholder="Enter transaction ID" required>
      </div>

      <div class="form-group">
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
      </div>

      <div class="form-group">
        <label for="pin">PIN:</label>
        <input type="password" id="pin" name="pin" placeholder="Enter PIN" required>
      </div>

      <button type="submit" class="btn">Add Now</button>
    </form>
  </div>
</div> 

@endsection
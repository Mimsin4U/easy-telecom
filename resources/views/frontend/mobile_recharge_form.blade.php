@extends('frontend.master')

@section('content')

<div class="container">
  <div class="first">
  <h1>Mobile Recharge</h1>
  <form action="#" class="recharge-form">

    <div class="form-group">
      <label for="operator">Select Operator:</label>
      <select id="operator" name="operator" required>
        <option value="" disabled selected>Select Operator</option>
        <option value="operator1">Banglalink</option>
        <option value="operator2">Grameenphone</option>
        <option value="operator3">Robi</option>
        <option value="operator3">Airtail</option>
    
      </select>
    </div>

    <div class="form-group">
      <label for="phoneNumber">Phone Number:</label>
      <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" required>
    </div>

    <div class="form-group">
      <label for="amount">Select Amount:</label>
      <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>
    </div>

    <button type="submit" class="btn">Recharge Now</button>
  </form>
</div>
</div>
<script src="script.js"></script><div class="container-fluid">
  <div class="first">
  <h1>Mobile Recharge</h1>
  <form action="#" class="recharge-form">

    <div class="form-group">
      <label for="operator">Select Operator:</label>
      <select id="operator" name="operator" required>
        <option value="" disabled selected>Select Operator</option>
        <option value="operator1">Banglalink</option>
        <option value="operator2">Grameenphone</option>
        <option value="operator3">Robi</option>
        <option value="operator3">Airtail</option>
    
      </select>
    </div>

    <div class="form-group">
      <label for="phoneNumber">Phone Number:</label>
      <input type="tel" id="phoneNumber" name="phoneNumber" placeholder="Enter phone number" required>
    </div>

    <div class="form-group">
      <label for="amount">Select Amount:</label>
      <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>
    </div>

    <button type="submit" class="btn">Recharge Now</button>
  </form>
</div>
</div>
<script src="script.js"></script>
@endsection
@extends('frontend.master')

@section('content')
    <div class="container">
        <div class="first">
            <h1>Mobile Recharge</h1>
            <form action="#" class="recharge-form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="operator">Select Operator:</label>
                    <select id="operator" name="operator" required>
                        <option value="" disabled selected>Select Operator</option>
                        <option value="Banglalink">Banglalink</option>
                        <option value="Grameenphone">Grameenphone</option>
                        <option value="Robi">Robi</option>
                        <option value="Airtel">Airtel</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="phoneNumber">Mobile Number:</label>
                    <input type="text" id="mobile_no" name="phoneNumber" placeholder="Enter phone number" required min="1">
                </div>

                <div class="form-group">
                    <label for="amount">Amount:</label>
                    <input type="number" id="amount" name="amount" placeholder="Enter amount" required min="1">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                </div>

                <button type="submit" class="btn">Recharge</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    
@endsection

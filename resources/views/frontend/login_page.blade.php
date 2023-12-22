@extends('frontend.master')

@section('addmoney')

<div class="container">
    <div class="first">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <h1>Login</h1>
    <form action="{{route('client.login')}}" class="login-form" method="POST">
      @csrf
      <div class="form-group">
        <label for="username">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter Email" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" placeholder="Enter password" required>
      </div>

      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</div>

@endsection

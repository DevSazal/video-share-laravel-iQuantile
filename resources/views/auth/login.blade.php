<!--  -->

@extends('layouts.app')

@section('title', 'Login')


@section('content')

<div class="jumbotron text-center">
  <h1>Login (Teacher)</h1>
  <p></p>
</div>

<form action="{{ route('login') }}" method="POST">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputUserName">Username/Email</label>
      <input type="text" name="email" class="form-control" id="inputUserName">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputPassword">Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword">
    </div>
  </div>


  <div class="form-group">
    <div class="form-check">

    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign In</button>
  <a href="{{ url('/register') }}"> Go to Register page ...</a>
</form>
@endsection

@extends('template.auth_template')

@section('content')
<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
<form method="POST" action="{{ url('/login') }}">
    @csrf
  <div class="form-floating">
    <input type="email" name="email" id="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating">
    <input type="password" name="password" id="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
  </div>

  <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Sign in</button>
  <small>already have account? <a href="{{ url('/register') }}">register here</a></small>
</form>
@endsection

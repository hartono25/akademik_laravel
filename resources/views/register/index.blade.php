@extends('template.auth_template')

@section('content')
<h1 class="h3 mb-3 fw-normal">Form Registration</h1>
<form method="POST" action="{{ url('/register') }}">
    @csrf
  <div class="form-floating">
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
    <label for="name">Nama Lengkap</label>

    @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" value="{{ old('email') }}" required>
    <label for="email">Email address</label>
    
    @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
    <label for="password">Password</label>

    @error('password')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Sign Up</button>
  <small>already have account? <a href="{{ url('/login') }}">login here</a></small>
</form>
@endsection


@extends('layout')
@section('title', 'Login')
@section('content')
<dive class="d-flex justify-content-center">  
  <form action="{{ route('loginpost') }}" method="post" class="ms-auto me-auto mt-auto" style="width: 50%">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    @if (session('error'))
      <div class="alert alert-danger mt-3">
      {{ session('error') }}
      </div>
    @endif
  </form>
</div>

@endsection


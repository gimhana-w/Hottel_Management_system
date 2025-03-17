@extends('layout')
@section('title', 'Login')
@section('content')
<section class="vh-100 d-flex align-items-center" style="background: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden bg-white">
          <div class="row g-0">
            <!-- Left Section: Login Form -->
            <div class="col-lg-6 p-4 p-md-5">
              <div class="text-center">
                <img src="{{ asset('images/Hoteliaxlogo.png') }}" class="img-fluid mb-4" style="max-width: 185px;" alt="logo">
                <h4 class="fw-bold text-dark mb-4">Streamline Your Hospitality</h4>
              </div>
              <form action="{{ route('loginpost') }}" method="post">
                @csrf
                <p class="text-muted text-center mb-4">Please login to your account</p>
                <!-- Email Input -->
                <div class="mb-4 position-relative">
                  <input type="email" name="email" class="form-control rounded-3 py-3" placeholder="Phone number or email address" required>
                  <label class="form-label position-absolute top-0 start-0 translate-middle-y ms-3 bg-white px-1 text-muted" style="font-size: 0.9rem;">Username</label>
                </div>
                <!-- Password Input -->
                <div class="mb-4 position-relative">
                  <input type="password" name="password" class="form-control rounded-3 py-3" placeholder="Password" required>
                  <label class="form-label position-absolute top-0 start-0 translate-middle-y ms-3 bg-white px-1 text-muted" style="font-size: 0.9rem;">Password</label>
                </div>
                <!-- Submit Button & Error Message -->
                <div class="text-center mb-4">
                  <button type="submit" class="btn w-100 py-2 text-white" style="background: linear-gradient(to right, #00bf72, #008793); border: none;">Login</button>
                  @if (session('error'))
                    <div class="alert alert-danger mt-3 rounded-3">
                      {{ session('error') }}
                    </div>
                  @endif
                </div>
              </form>
            </div>
            <!-- Right Section: Background Image with Text Overlay -->
            <div class="col-lg-6 d-flex align-items-center text-white p-4 p-md-5" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/loginP.jpg') }}'); background-size: cover; background-position: center;">
              <div class="text-center w-100">
                <h4 class="fw-bold mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
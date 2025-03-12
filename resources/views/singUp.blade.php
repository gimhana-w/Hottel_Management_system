@extends('layout')
@section('title', 'Login')
@section('content')
<dive class="d-flex justify-content-center">    
    <form action="{{ route('registerpost') }}" method="post" calss="ms-auto me-auto mt-auto"style="width: 50%">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control"name="name" >
        </div>
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control"  name="email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <script>
            function regpost() {
            document.querySelector('form').submit();
            }
        </script>
    </form>
</div>

@endsection


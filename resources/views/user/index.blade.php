@extends('layout')

@section('title', 'Users')
@section('content')


<div class="d-flex">
@include('include.sidebar')
    <div class="flex-grow-1">
        <main class="p-5">
                    <!-- Metrics Cards -->
                    <div class="col">
                        <div class="card h-100 width: auto;">
                            <div class="card-body">
                                <div class="container">
                                <h2>Users Management</h2>
                                 <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
         @endif

        <table class="table">
        <thead>
            <tr>
                <th>Users Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $users)
            <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>
                    @foreach($users->getRoleNames() as $role)
                    <button class="btn btn-success btn-sm">{{ $role }}</button>
                    @endforeach
                </td>
                <td>
                    <a href="{{ route('users.edit', $users->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('users.destroy', $users->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
    
@endsection




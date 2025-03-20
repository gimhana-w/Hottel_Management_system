@extends('layout')

@section('title', 'Roles')
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
                                <h2>Role Management</h2>
                                 <a href="{{ route('roles.create') }}" class="btn btn-primary">Add Role</a>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
         @endif

        <table class="table">
        <thead>
            <tr>
                <th>Role id</th>
                <th>Role Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $roles)
            <tr>
                <td>{{ $roles->id }}</td>
                <td>{{ $roles->name }}</td>
                <td>
                    <a href="{{ route('roles.edit', $roles->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('roles.destroy', $roles->id) }}" method="POST" style="display:inline;">
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




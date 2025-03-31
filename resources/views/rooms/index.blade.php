@extends('layout')

@section('title', 'Rooms')
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
                                <h2>Room Management</h2>
                                @can('room-create')
                                 <a href="{{ route('rooms.create') }}" class="btn btn-primary">Add Room</a>
                                @endcan

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
         @endif

        <table class="table">
        <thead>
            <tr>
                <th>Room Number</th>
                <th>Type</th>
                <th>Price</th>
                <th>Capacity</th>
                <th>Is Active</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rooms as $room)
            <tr>
                <td>{{ $room->room_number }}</td>
                <td>{{ ucfirst($room->type) }}</td>
                <td>${{ $room->price }}</td>
                <td>{{ $room->capacity }}</td>
                <td>{{ $room->is_available ? 'Yes' : 'No' }}</td>
                <td>
                    @can('room-edit')
                    <a href="{{ route('rooms.edit', $room->id) }}" class="btn btn-warning">Edit</a>
                    @endcan

                    @can('room-delete')
                    <form action="{{ route('rooms.destroy', $room->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    @endcan
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




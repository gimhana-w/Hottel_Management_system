@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Room</h2>
    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Room Number</label>
            <input type="text" name="room_number" class="form-control" value="{{ $room->room_number }}" required>
        </div>
        <div class="mb-3">
            <label>Room Type</label>
            <select name="type" class="form-control">
                <option value="single" {{ $room->type == 'single' ? 'selected' : '' }}>Single</option>
                <option value="double" {{ $room->type == 'double' ? 'selected' : '' }}>Double</option>
                <option value="suite" {{ $room->type == 'suite' ? 'selected' : '' }}>Suite</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control" value="{{ $room->price }}" required>
        </div>
        <div class="mb-3">
            <label>Capacity</label>
            <input type="number" name="capacity" class="form-control" value="{{ $room->capacity }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection

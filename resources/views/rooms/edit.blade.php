

@extends('layout')
@section('title', 'update')
@section('content')

<div class="d-flex">
    <!-- Sidebar -->
    @include('include.sidebar')

    <!-- Main Content -->
    <div class="flex-grow-1">
    <main class="p-5">
    <div class="col-md-9">
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
        </div>
    </div>
</div>

@push('styles')
    <style>
        /* Ensure the sidebar has a fixed width */
        .sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 1000;
        }

        /* Ensure charts are responsive */
        canvas {
            width: 100% !important;
            height: auto !important;
            max-height: 300px;
        }

        /* Responsive font sizes for cards */
        .card-title {
            font-size: 1.25rem;
        }

        .display-6 {
            font-size: 2rem;
        }

        /* Adjust layout for smaller screens */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .flex-grow-1 {
                margin-left: 0 !important; /* Remove margin on smaller screens */
            }

            .header .w-md-25 {
                width: 100% !important;
            }

            .card-title {
                font-size: 1rem;
            }

            .display-6 {
                font-size: 1.5rem;
            }

            .table td {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .card-title {
                font-size: 0.9rem;
            }

            .display-6 {
                font-size: 1.2rem;
            }

            .table td {
                font-size: 0.8rem;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Earnings Chart
        const earningsChart = new Chart(document.getElementById('earningsChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                datasets: [{
                    label: 'Earnings ($)',
                    data: [300, 400, 500, 600, 700, 650, 800, 750, 900, 34657],
                    borderColor: 'green',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Subscriptions Chart
        const subscriptionsChart = new Chart(document.getElementById('subscriptionsChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: ['12pm', '3pm', '6pm', '9pm', '12am', '3am', '6am'],
                datasets: [{
                    label: 'Subscriptions',
                    data: [0, 500, 1000, 1500, 2000, 169],
                    borderColor: 'orange',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Downloads Chart
        const downloadsChart = new Chart(document.getElementById('downloadsChart').getContext('2d'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                datasets: [{
                    label: 'Downloads',
                    data: [80, 85, 90, 95, 100, 95, 90, 85, 90, 8960],
                    borderColor: 'yellow',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
@endpush

@endsection
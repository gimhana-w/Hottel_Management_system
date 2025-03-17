@extends('layout')
@section('title', 'Dashboard')
@section('content')

<div class="d-flex">
    <!-- Sidebar -->
    @include('include.sidebar')

    <!-- Main Content -->
 
            <main class="p-3">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                    <!-- Metrics Cards -->
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Storage Capacity</h5>
                                <p class="card-text display-6">150GB</p>
                                <p class="card-text text-muted">Update Now</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Revenue</h5>
                                <p class="card-text display-6">$1,345</p>
                                <p class="card-text text-muted">Last day</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Errors</h5>
                                <p class="card-text display-6">23</p>
                                <p class="card-text text-muted">In last hour</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Followers</h5>
                                <p class="card-text display-6">+45K</p>
                                <p class="card-text text-muted">Update now</p>
                            </div>
                        </div>
                    </div>

                    <!-- Charts -->
                    <div class="col-12 col-md-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Earnings (Last 10 Quarters)</h5>
                                <canvas id="earningsChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Subscriptions (Last 7 Days)</h5>
                                <canvas id="subscriptionsChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Downloads (Last 6 Years)</h5>
                                <canvas id="downloadsChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <!-- Global Sales -->
                    <div class="col-12 col-md-6 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Global Sales by Top Locations</h5>
                                <p class="card-text text-muted">All Products That Were Shipped</p>
                                <table class="table table-responsive">
                                    <tbody>
                                        <tr>
                                            <td><img src="https://flagcdn.com/us.svg" width="20"> USA</td>
                                            <td>2,920</td>
                                            <td>52.23%</td>
                                            <td><button class="btn btn-link">+</button></td>
                                        </tr>
                                        <tr>
                                            <td><img src="https://flagcdn.com/de.svg" width="20"> Germany</td>
                                            <td>1,300</td>
                                            <td>20.43%</td>
                                            <td><button class="btn btn-link">+</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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
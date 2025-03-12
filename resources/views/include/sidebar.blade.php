<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white" style="width: 280px; height: 100vh; ">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4">Hotel Admin</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active' : '' }}" aria-current="page">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Pages</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Components</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Forms</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Tables</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Maps</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Widgets</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Charts</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white">Calendar</a>
            </li>
        </ul>
    </div>
<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white sidebar collapse" id="sidebarCollapse" style="width: 280px; height: 100vh;">
    <div class="d-flex align-items-center mb-3">
        <a href="/" class="d-flex align-items-center text-white text-decoration-none flex-grow-1">
            <span class="fs-4 fw-bold">Hotel Admin</span>
        </a>
        <!-- Close button for mobile -->
        <button class="btn btn-link text-white d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse">
            <i class="bi bi-x-lg"></i>
        </button>
        </div>
        <hr class="border-light">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" 
                class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active' : '' }} py-3" 
                aria-current="page">
                <i class="bi bi-house-door me-2"></i>Dashboard
            </a>
         </li>
            </li>
            <li class="nav-item">
            <a href="{{ route('user.index') }}" 
               class="nav-link {{ request()->routeIs('user.index') ? 'active bg-primary text-white' : 'text-white' }} py-3" 
               aria-current="page">
            <i class="bi bi-puzzle me-2"></i>Users
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('rooms.index') }}" 
               class="nav-link {{ request()->routeIs('rooms.index') ? 'active bg-primary text-white' : 'text-white' }} py-3" 
               aria-current="page">
            <i class="bi bi-puzzle me-2"></i>Room Panel
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('roles.index') }}" 
               class="nav-link {{ request()->routeIs('roles.index') ? 'active bg-primary text-white' : 'text-white' }} py-3" 
               aria-current="page">
            <i class="bi bi-puzzle me-2"></i>Manage Role
            </a>
           
        <li class="nav-item">
            <a href="#" class="nav-link text-white py-3">
                <i class="bi bi-input-cursor-text me-2"></i>Forms
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white py-3">
                <i class="bi bi-table me-2"></i>Tables
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white py-3">
                <i class="bi bi-geo-alt me-2"></i>Maps
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white py-3">
                <i class="bi bi-grid-3x3-gap me-2"></i>Widgets
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white py-3">
                <i class="bi bi-bar-chart me-2"></i>Charts
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link text-white py-3">
                <i class="bi bi-calendar me-2"></i>Calendar
            </a>
        </li>
    </ul>
</div>
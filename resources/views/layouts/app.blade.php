<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Foodpanda') }} - @yield('title', 'Dashboard')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
        }
        .sidebar .nav-link {
            color: #495057;
            border-radius: 8px;
            margin-bottom: 4px;
        }
        .sidebar .nav-link:hover {
            background-color: #fce4ec;
            color: #e91e63;
        }
        .sidebar .nav-link.active {
            background-color: #fce4ec;
            color: #e91e63;
            font-weight: 500;
        }
        .brand {
            color: #e91e63 !important;
            font-weight: 700;
        }
        .user-avatar {
            width: 40px;
            height: 40px;
            background-color: #fce4ec;
            color: #e91e63;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse show">
                <div class="position-sticky pt-3">
                    <!-- Logo -->
                    <div class="px-3 mb-3">
                        <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none">
                            <span class="fs-4">🍔</span>
                            <span class="fs-5 ms-2 brand">foodpanda</span>
                        </a>
                    </div>
                    
                    <!-- Navigation -->
                    <ul class="nav flex-column px-3">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') || request()->path() == '/' ? 'active' : '' }}">
                                <i class="bi bi-house-door me-2"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                                <i class="bi bi-speedometer2 me-2"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-people me-2"></i>
                                Customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-bag me-2"></i>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="bi bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                    
                    <!-- User Profile & Logout -->
                    <div class="px-3 mt-auto py-3 border-top">
                        <div class="d-flex align-items-center mb-3">
                            <div class="user-avatar me-2">
                                {{ strtoupper(substr(auth()->user()->email, 0, 2)) }}
                            </div>
                            <div>
                                <div class="fw-medium">{{ auth()->user()->name ?? 'User' }}</div>
                                <small class="text-muted">{{ auth()->user()->email }}</small>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary btn-sm w-100">
                                <i class="bi bi-box-arrow-right me-1"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            
            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!-- Top Header -->
                <div class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom bg-white">
                    <h4 class="mb-0">@yield('header', 'Dashboard')</h4>
                    <div class="d-flex align-items-center">
                        <span class="text-muted me-3">{{ now()->format('l, F j, Y') }}</span>
                        <button class="btn btn-light position-relative">
                            <i class="bi bi-bell"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Page Content -->
                <div class="pb-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>

@extends('layouts.app')

@section('title', 'Dashboard')
@section('header', 'Dashboard')

@section('content')
<!-- Welcome Card -->
<div class="card bg-danger text-white mb-4">
    <div class="card-body">
        <h4 class="card-title">Welcome back! 👋</h4>
        <p class="card-text">Here's what's happening with your food business today.</p>
    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-md-6 col-xl-3 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Total Orders</p>
                        <h3 class="mb-0">1,234</h3>
                    </div>
                    <div class="bg-danger bg-opacity-10 p-3 rounded">
                        <i class="bi bi-bag text-danger fs-4"></i>
                    </div>
                </div>
                <small class="text-success"><i class="bi bi-arrow-up"></i> +12% from last month</small>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-xl-3 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Total Revenue</p>
                        <h3 class="mb-0">$45,678</h3>
                    </div>
                    <div class="bg-success bg-opacity-10 p-3 rounded">
                        <i class="bi bi-currency-dollar text-success fs-4"></i>
                    </div>
                </div>
                <small class="text-success"><i class="bi bi-arrow-up"></i> +8% from last month</small>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-xl-3 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Active Restaurants</p>
                        <h3 class="mb-0">56</h3>
                    </div>
                    <div class="bg-primary bg-opacity-10 p-3 rounded">
                        <i class="bi bi-shop text-primary fs-4"></i>
                    </div>
                </div>
                <small class="text-muted">12 new this month</small>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-xl-3 mb-3">
        <div class="card h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted mb-1">Total Customers</p>
                        <h3 class="mb-0">8,901</h3>
                    </div>
                    <div class="bg-warning bg-opacity-10 p-3 rounded">
                        <i class="bi bi-people text-warning fs-4"></i>
                    </div>
                </div>
                <small class="text-success"><i class="bi bi-arrow-up"></i> +15% from last month</small>
            </div>
        </div>
    </div>
</div>

<!-- Recent Orders & Quick Actions -->
<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Recent Orders</h5>
                <a href="#" class="btn btn-sm btn-outline-danger">View All</a>
            </div>
            <div class="card-body p-0">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                                    <span class="text-danger fw-medium">JD</span>
                                </div>
                                <div>
                                    <strong>John Doe</strong>
                                    <br><small class="text-muted">Burger King - 3 items</small>
                                </div>
                            </div>
                            <div class="text-end">
                                <strong>$24.99</strong>
                                <br><small class="text-success">Completed</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                    <span class="text-primary fw-medium">AS</span>
                                </div>
                                <div>
                                    <strong>Alice Smith</strong>
                                    <br><small class="text-muted">Pizza Hut - 2 items</small>
                                </div>
                            </div>
                            <div class="text-end">
                                <strong>$18.50</strong>
                                <br><small class="text-warning">Pending</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                                    <span class="text-warning fw-medium">MJ</span>
                                </div>
                                <div>
                                    <strong>Michael Johnson</strong>
                                    <br><small class="text-muted">KFC - 5 items</small>
                                </div>
                            </div>
                            <div class="text-end">
                                <strong>$45.00</strong>
                                <br><small class="text-success">Completed</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Quick Actions</h5>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('home') }}" class="btn btn-danger btn-lg">
                        <i class="bi bi-plus-circle me-2"></i>Add New Food
                    </a>
                    <a href="#" class="btn btn-outline-primary">
                        <i class="bi bi-person-plus me-2"></i>Add Customer
                    </a>
                    <a href="#" class="btn btn-outline-success">
                        <i class="bi bi-file-earmark-text me-2"></i>View Reports
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Home')
@section('header', 'Foods')

@section('content')
<!-- Header Actions -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <p class="text-muted mb-0">Manage your restaurant's food menu</p>
    <button class="btn btn-danger">
        <i class="bi bi-plus-circle me-1"></i>Add New Food
    </button>
</div>

<!-- Filters -->
<div class="card mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-4">
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search foods...">
                </div>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option value="">All Categories</option>
                    <option value="fast-food">Fast Food</option>
                    <option value="pizza">Pizza</option>
                    <option value="asian">Asian</option>
                    <option value="desserts">Desserts</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option value="">All Status</option>
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select>
            </div>
        </div>
    </div>
</div>

<!-- Foods Grid -->
<div class="row">
    <!-- Food Card 1 -->
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
            <div class="bg-warning bg-opacity-25 text-center py-4">
                <span class="fs-1">🍔</span>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="card-title mb-0">Classic Burger</h5>
                    <span class="badge bg-success">Available</span>
                </div>
                <p class="text-muted small">Juicy beef patty with fresh lettuce, tomato, and special sauce</p>
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-danger mb-0">$8.99</h4>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Food Card 2 -->
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
            <div class="bg-warning bg-opacity-25 text-center py-4">
                <span class="fs-1">🍕</span>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="card-title mb-0">Pepperoni Pizza</h5>
                    <span class="badge bg-success">Available</span>
                </div>
                <p class="text-muted small">Classic pepperoni with mozzarella cheese and tomato sauce</p>
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-danger mb-0">$14.99</h4>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Food Card 3 -->
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
            <div class="bg-warning bg-opacity-25 text-center py-4">
                <span class="fs-1">🍗</span>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="card-title mb-0">Fried Chicken</h5>
                    <span class="badge bg-success">Available</span>
                </div>
                <p class="text-muted small">Crispy fried chicken with our secret blend of spices</p>
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-danger mb-0">$10.99</h4>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Food Card 4 -->
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
            <div class="bg-warning bg-opacity-25 text-center py-4">
                <span class="fs-1">🍣</span>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="card-title mb-0">Sushi Platter</h5>
                    <span class="badge bg-warning text-dark">Low Stock</span>
                </div>
                <p class="text-muted small">Assorted fresh sushi with salmon, tuna, and avocado</p>
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-danger mb-0">$24.99</h4>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Food Card 5 -->
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
            <div class="bg-warning bg-opacity-25 text-center py-4">
                <span class="fs-1">🥗</span>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="card-title mb-0">Healthy Salad</h5>
                    <span class="badge bg-success">Available</span>
                </div>
                <p class="text-muted small">Fresh mixed greens with grilled chicken and vinaigrette</p>
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-danger mb-0">$9.99</h4>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Food Card 6 -->
    <div class="col-md-6 col-xl-4 mb-4">
        <div class="card h-100">
            <div class="bg-warning bg-opacity-25 text-center py-4">
                <span class="fs-1">🍜</span>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="card-title mb-0">Chicken Noodles</h5>
                    <span class="badge bg-secondary">Unavailable</span>
                </div>
                <p class="text-muted small">Hot and spicy noodles with tender chicken pieces</p>
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="text-danger mb-0">$7.99</h4>
                    <div>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-between align-items-center">
    <small class="text-muted">Showing 1-6 of 24 items</small>
    <nav>
        <ul class="pagination mb-0">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item active">
                <span class="page-link bg-danger border-danger">1</span>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
@endsection

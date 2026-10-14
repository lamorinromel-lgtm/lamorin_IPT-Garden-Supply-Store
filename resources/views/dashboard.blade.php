
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="p-4 p-md-5 mb-4 bg-success text-white rounded-3">
    <h1>Garden Supply Store</h1>
    <p class="mb-3">
        Manage your garden products, categories, suppliers, customers, and orders.
    </p>
    @if(Route::has('products.index'))
        <a href="{{ route('products.index') }}" class="btn btn-light">
            Manage Products
        </a>
    @endif
</div>

<div class="row g-3">
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h5>Categories</h5>
                <p>Organize garden supplies by type.</p>
                <a href="{{ route('categories.index') }}" class="btn btn-success">
                    Open Categories
                </a>
            </div>
        </div>
    </div>

    @if(Route::has('suppliers.index'))
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5>Suppliers</h5>
                    <p>Manage supplier information.</p>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-success">
                        Open Suppliers
                    </a>
                </div>
            </div>
        </div>
    @endif

    @if(Route::has('customers.index'))
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5>Customers</h5>
                    <p>Manage customer records.</p>
                    <a href="{{ route('customers.index') }}" class="btn btn-success">
                        Open Customers
                    </a>
                </div>
            </div>
        </div>
    @endif

    @if(Route::has('products.index'))
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5>Products</h5>
                    <p>Manage prices and inventory stock.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-success">
                        Open Products
                    </a>
                </div>
            </div>
        </div>
    @endif

    @if(Route::has('orders.index'))
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5>Orders</h5>
                    <p>Create and track customer orders.</p>
                    <a href="{{ route('orders.index') }}" class="btn btn-success">
                        Open Orders
                    </a>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection

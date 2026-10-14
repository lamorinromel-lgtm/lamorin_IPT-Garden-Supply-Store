@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="mb-4">
    <a href="{{ route('categories.index') }}" class="text-decoration-none">&larr; Back to Categories</a>
    <h1 class="h2 mt-3 mb-1">Edit Category</h1>
    <p class="text-secondary mb-0">Update {{ $category->name }}.</p>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            @include('categories._form')
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">Update Category</button>
                <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', $category->name)

@section('content')
<div class="mb-4">
    <a href="{{ route('categories.index') }}" class="text-decoration-none">&larr; Back to Categories</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-start gap-3">
            <div>
                <h1 class="h2 mb-2">{{ $category->name }}</h1>
                <p class="text-secondary mb-0">{{ $category->description ?: 'No description provided.' }}</p>
            </div>
            <a href="{{ route('categories.edit', $category) }}" class="btn btn-success">Edit Category</a>
        </div>
    </div>
</div>
@endsection

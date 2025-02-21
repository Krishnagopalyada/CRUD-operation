@extends('products.layout')

@section('content')
<h2>Add Product</h2>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantity</label>
        <input type="number" name="quantity" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" step="0.01" name="price" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    <button class="btn btn-primary">Submit</button>
</form>
@endsection

@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" class="needs-validation" novalidate="">
                        @csrf
                        @method('PUT') <!-- Gunakan method PUT untuk mengirimkan data ke fungsi update -->
                        <div class="card-header">
                            <h4>Edit Product</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" value="{{ $product->product_name }}" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" id="description" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            Rp.
                                        </div>
                                    </div>
                                    <input type="text" class="form-control currency" name="price" id="price" value="{{ $product->price }}" required>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label>Quantity</label>
                                <input type="number" class="form-control" name="stock" id="stock" value="{{ $product->stock }}" required>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

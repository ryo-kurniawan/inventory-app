@extends('layouts.app')

@section('title', 'Products')

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                  <h4>Product List</h4>
                  
                </div>
                <div class="card-body">
                    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
                    @if ($products->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                          <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Stock</th>
                                <th class="text-center">Action</th>
                              </tr>
                          </thead>
                          <tbody >
                            @foreach ($products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->description }}</td>
                                <td class="text-center">{{ $product->price }}</td>
                                <td class="text-center">{{ $product->stock }}</td>
                                <td class="text-center">
                                  <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                  <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    @else
                    <p>No products found.</p>
                    @endif
                  
                </div>
              </div>
        </div>
      </div>
</div>  
@endsection
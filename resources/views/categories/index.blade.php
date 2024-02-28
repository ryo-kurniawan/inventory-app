@extends('layouts.app')

@section('title', 'Products')

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                  <h4>Categories</h4>
                  
                </div>
                <div class="card-body">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add New Category</a>
                    @if ($categories->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                          <thead>
                            <tr>
                                <th>No</th>
                                <th>Category Name</th>
                                <th class="text-center">Action</th>
                              </tr>
                          </thead>
                          <tbody >
                            @foreach ($categories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
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
@extends('layouts.app')

@section('title', 'Add New Products')

@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <form method="POST" action="{{ route('products.store') }}" class="needs-validation" novalidate="">
                      @csrf
                      <div class="card-header">
                        <h4>Add New Product</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label>Product Name</label>
                          <input type="text" class="form-control" name="product_name" id="product_name" required>
                        </div>
                        <div class="form-group">
                          <label>Description</label>
                          <textarea class="form-control" name="description" id="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  Rp.
                                </div>
                              </div>
                              <input type="text" class="form-control currency" name="price" id="price" required>
                            </div>
                          </div>
                        <div class="form-group mb-0">
                          <label>Quantity</label>
                          <input type="number" class="form-control" name="stock" id="stock" required>
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
@endSection
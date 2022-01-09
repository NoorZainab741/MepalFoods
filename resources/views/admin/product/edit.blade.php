@extends('admin.layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Product</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('admin.layouts.form')

@section('form-heading', 'Edit Product')

@section('route', route('products.update', ['product' => $product->id]))

@section('form-fields')
    @include('admin.product.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update Product')

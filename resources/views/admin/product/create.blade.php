
@extends('admin.layouts.master')

@section('title', 'Create')

@section('breadcrumb-title', 'Create')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Product</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@extends('admin.layouts.form')

@section('form-heading', 'Add New Product')

@section('route', route('products.store'))

@section('form-fields')
    @include('admin.product.fields')
@endsection

@section('submit-text', 'Create Product')

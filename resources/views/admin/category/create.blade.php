
@extends('admin.layouts.master')

@section('title', 'Create')

@section('breadcrumb-title', 'Create')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Category</li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@extends('admin.layouts.form')

@section('form-heading', 'Add New Category')

@section('route', route('categories.store'))

@section('form-fields')
    @include('admin.category.fields')
@endsection

@section('submit-text', 'Create Category')

@extends('admin.layouts.master')

@section('title', 'Edit')

@section('breadcrumb-title', 'Edit')

@section('breadcrumb-item')
    <li class="breadcrumb-item">Category</li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@extends('admin.layouts.form')

@section('form-heading', 'Edit Category')

@section('route', route('categories.update', ['category' => $category->id]))

@section('form-fields')
    @include('admin.category.fields')
    @method('PUT')
@endsection

@section('submit-text', 'Update Category')

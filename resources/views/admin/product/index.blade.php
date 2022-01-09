@extends('admin.layouts.master')

@section('title', 'Product')

@section('breadcrumb-title', 'Product')
@section('breadcrumb-item')
    <li class="breadcrumb-item">Product</li>
    <li class="breadcrumb-item active">List</li>
@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="pull-left">Product List</h4>
                        <a href="{{route('products.create')}}"
                           class="btn btn-primary pull-right">
                            <i class="fa fa-plus">
                                Add New Product</i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Name</th>
                                    <th>Category Name</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->category->name}}</td>
                                        <td>@if($product->image == null)
                                                No Image
                                            @else
                                            <img  class="img-responsive" src="{{asset('storage/'.$product->image)}}" alt="">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                                class="btn btn-primary btn-sm m-1 p-2" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
{{--                                            <a href="{{ route('products.show', ['Product' => $product->id]) }}"--}}
{{--                                                class="btn btn-success btn-sm m-1 p-2" title="View">--}}
{{--                                                <i class="fa fa-eye"></i>--}}
{{--                                            </a>--}}
                                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                                method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                   class="btn btn-danger btn-sm m-1 p-2" title="Delete">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
{{--                        {{$modules->Links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

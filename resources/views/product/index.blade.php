@extends('layouts.app')
@section('content')

<h2 class="font-bold text-3xl text-blue-800">Products</h2>
<hr class="h-1 bg-gray-600 mt-3">

<div class="text-right my-5">
    <a href="{{route('product.create')}}" class="bg-blue-600 px-5 py-2 rounded text-white">Add Product</a>
</div>


@endsection
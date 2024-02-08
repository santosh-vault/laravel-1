@extends('layouts.app')
@section('content')

<h2 class="font-bold text-3xl text-blue-800">Products</h2>
<hr class="h-1 bg-gray-600 mt-3">

<div class="text-right my-5">
    <a href="{{route('product.create')}}" class="bg-blue-600 px-5 py-2 rounded text-white">Add Product</a>
</div>

<table class="w-full">
    <tr>
        <th class="border p-2 ">SN</th>
        <th class="border p-2 ">Categiry</th>
        <th class="border p-2 ">Name</th>
        <th class="border p-2 ">Description</th>
        <th class="border p-2 ">Price</th>
        <th class="border p-2 ">Stock</th>
        <th class="border p-2 ">Status</th>
        <th class="border p-2 ">Photo</th>
        <th class="border p-2 ">Action</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td class="border p-2">1</td>
        <td class="border p-2">{{$product->category->categoryname}}</td>
        <td class="border p-2">{{$product->name}}</td>
        <td class="border p-2">{{$product->description}}</td>
        <td class="border p-2">{{$product->price}}</td>
        <td class="border p-2">{{$product->stock}}</td>
        <td class="border p-2">{{$product->status}}</td>
        <td class="border p-2"><img src="{{asset('images/products/'.$product->photopath)}}" class="h-32"
                alt="laraone product images"></td>
        <td class="border p-2">
            <a href="" class="bg-blue-500 text-white px-3 py-2 rounded">Edit</a>
            <a href="" class="bg-red-500 text-white px-3 py-2 rounded">Cancel</a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
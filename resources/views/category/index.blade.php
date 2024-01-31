@extends('layouts.app')
@section('content')

<h2 class="font-bold text-3xl text-blue-800">Catagories</h2>
<hr class="h-1 bg-gray-600 mt-3">

<div class="text-right my-5">
    <a href="{{route('category.create')}}" class="bg-blue-600 px-5 py-2 rounded text-white">Add Category</a>
</div>


<table class="mt-5 w-full">

    @foreach($categories as $category)
    <tr>
        <th class="border-gray-300 p-2   border-solid border-2">{{$category->priority}}</th>
        <th class="border-gray-300 p-2   border-solid border-2">{{$category->categoryname}}</th>
        <th class="border-gray-300 p-2   border-solid border-2">
            <a href="{{Route('category.edit',$category->id)}}"
                class='bg-blue-600 text-white px-3 py-1 rounded mx-1'>Edit</a>
            <a href="{{ route('category.delete', $category->id) }}" class='bg-red-600 text-white px-3 py-1 rounded mx-1'
                onclick="return confirm('Are you sure you want to delete?');">
                Delete
            </a>

        </th>
    </tr>
    @endforeach



</table>
@endsection
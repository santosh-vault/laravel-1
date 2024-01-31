@extends('layouts.app')
@section('content')

<h2 class="font-bold text-3xl text-blue-800">Edit category</h2>
<hr class="h-1 bg-gray-600 mt-3">

<form action="{{route('category.update',$category->id)}}" method="POST" class="mt-5">    @csrf
    <input type="text" name="categoryname" placeholder="category Name"
     class="block w-full rounded border-gray-300 my-4" value="{{$category->categoryname}}" >
    @error('categoryname')
        <div class="text-red-500 -mt-4">{{$message}}</div>
    @enderror
    <input type="text" name="priority" placeholder="Priority" 
    class="block w-full rounded border-gray-300 my-4" value="{{$category->priority}}">
    @error('priority')
        <div class="text-red-500 -mt-4">{{$message}}</div>
    @enderror

    <div class="flex justify-center my-5">
    <input type="submit" value="update" class="bg-blue-600 text-white px-5 py-1 rounded mx-2">
    <a href="{{route('category.index')}}"  class="bg-red-600 text-white px-5 py-1 rounded mx-2">Exit</a>

    </div>
   
</form>

@endsection
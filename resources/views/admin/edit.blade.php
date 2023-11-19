
@extends('admin.layout')

@section('body')

@include('errors')

@include('success')

<form method="POST" action="{{url("product/$product->id")}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="exampleInputEmail1">product Name</label>
        <input type="text" name="name" class="form-control text-white" value="{{$product->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">product desc</label>
        <textarea type="text" name="desc" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter desc">{{$product->desc}}</textarea>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">product Price</label>
        <input type="number" name="price" class="form-control text-white" value="{{$product->price}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price">
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">product quantity</label>
        <input type="text" name="quantity" class="form-control text-white" value="{{$product->quantity}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Category ID</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group">
        <label for="exampleInputEmail1">product image</label>
        <input type="file" name="image" class="form-control text-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <img src="{{asset("storage/$product->image")}}" width="100 px" alt="" srcset="">
    </div>


    <button type="submit" class="btn btn-primary">update</button>
</form>

@endsection

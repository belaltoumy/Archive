@extends('Categore.layout');
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Edit Product</div>
    <div class="card-body">
        <form method="POST" action="{{ route('product.update', ['id' => $product->id]) }}">
            @method('PUT')
            @csrf
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}"><br>
            <label>Price</label><br>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}"><br>
            <select name="id_category" class="block mt-1 w-full" id="id_category" aria-label="Floating label select example" style="border-color:rgb(0 0 0 / 0.1); border-radius: 5px;">
                <option selected>{{ $product->id }}</option>
                @foreach($categores as $type)
                    <option value="{{$type->id}}"> type: {{$type->name}} </option>
                @endforeach
            </select><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection

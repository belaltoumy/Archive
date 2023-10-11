@extends('Categore.layout');
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Create New product</div>
    <div class="card-body">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            {{-- <label>Id</label><br>
         <input type="text" name="id" id="id" class="form-control"><br> --}}
         <label>Name</label><br>
         <input type="text" name="name" id="name" class="form-control"><br>
         <label>Price</label><br>
         <input type="number" name="price" id="price" class="form-control"><br>
         <select name="id_category" class="block mt-1 w-full" id="id_category" aria-label="Floating label select example" style="border-color:rgb(0 0 0 / 0.1); border-radius: 5px;">
            <option selected>Open this select menu</option>
            @foreach($categories as $type)
                <option value="{{$type->id}}"> type: {{$type->name}} </option>
            @endforeach
        </select><br>
         <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection

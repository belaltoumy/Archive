@extends('Categore.layout');
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Edit Categore</div>
    <div class="card-body">
        <form method="POST" action="{{ route('categore.update', ['id' => $category->id]) }}">
            @method('PUT')
            @csrf
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}"><br>
            <label>Price</label><br>
            <input type="number" name="price" id="price" class="form-control" value="{{ $category->price }}"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection

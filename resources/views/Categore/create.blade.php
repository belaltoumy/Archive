@extends('Categore.layout');
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Create New Categore</div>
    <div class="card-body">
        <form action="{{ route('categore.store') }}" method="POST">
            @csrf
            {{-- <label>Id</label><br>
         <input type="text" name="id" id="id" class="form-control"><br> --}}
         <label>Name</label><br>
         <input type="text" name="name" id="name" class="form-control"><br>
         <label>Price</label><br>
         <input type="number" name="price" id="price" class="form-control"><br>
         <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection

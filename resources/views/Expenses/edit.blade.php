@extends('Categore.layout');
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Edit Expenses</div>
    <div class="card-body">
        <form method="POST" action="{{ route('expenses.update', ['id' => $expenses->id]) }}">
            @method('PUT')
            @csrf
            <label>Name</label><br>
            <input type="text" name="name" id="name" class="form-control" value="{{ $expenses->name }}"><br>
            <label>Price</label><br>
            <input type="number" name="price" id="price" class="form-control" value="{{ $expenses->price }}"><br>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection

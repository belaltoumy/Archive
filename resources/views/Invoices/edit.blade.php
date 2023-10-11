@extends('Categore.layout');
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Edit Invoices</div>
    <div class="card-body">
        <form method="POST" action="{{ route('invoices.update', ['id' => $invoices->id]) }}">
            @method('PUT')
            @csrf
        <label>Code</label><br>
         <input type="text" name="Code" id="Code" class="form-control"><br>
         <label>selling_price</label><br>
         <input type="number" name="selling_price" id="selling_price" class="form-control"><br>
         <label>Purchasing_price</label><br>
         <input type="number" name="Purchasing_price" id="Purchasing_price" class="form-control"><br>
         <label for="date">Date:</label>
         <input type="date" name="date" id="date" class="form-control"><br>
         <input type="submit" value="Save" class="btn btn-success"><br>
         </form>
    </div>
</div>
@endsection

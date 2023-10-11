@extends('Categore.layout');
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Exchange التصريف</div>
    <div class="card-body">
        <form action="{{ route('exchange.store') }}" method="POST">
            @csrf
            {{-- <label>Id</label><br>
         <input type="text" name="id" id="id" class="form-control"><br> --}}
         <label>Many_Tl</label><br>
         <input type="text" name="Many_Tl" id="Many_Tl" class="form-control"><br>
         <label>Many_DR</label><br>
         <input type="number" name="Many_DR" id="Many_DR" class="form-control"><br>
         <label>exchange_rate</label><br>
         <input type="number" name="exchange_rate" id="exchange_rate" class="form-control"><br>
         <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection

@extends('Categore.layout');
@section('content')
<div class="card" style="margin:20px">
    <div class="card-header">Edit Exchange </div>
    <div class="card-body">
        <form method="POST" action="{{ route('exchange.update', ['id' => $exchange->id]) }}">
            @method('PUT')
            @csrf
            <label>Many_Tl</label><br>
            <input type="text" name="Many_Tl" id="Many_Tl" class="form-control" value="{{ $exchange->Many_Tl }}"><br>
            <label>Many_DR</label><br>
            <input type="number" name="Many_DR" id="Many_DR" class="form-control"  value="{{ $exchange->Many_DR }}"><br>
            <label>exchange_rate</label><br>
            <input type="number" name="exchange_rate" id="exchange_rate" class="form-control"  value="{{ $exchange->exchange_rate }}"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
           </form>
    </div>
</div>
@endsection

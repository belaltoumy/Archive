@extends('Categore.layout')
@section('content')
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2> Categores </h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('product/create') }}" class="btn btn-succes btn-sm" title="Add New Categore">
                        Add New
                    </a>
                    <br />
                    <br />
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id</th>
                                <th>id_category</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->id_category }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">

                                            <a href="{{ route('product.edit', $product->id) }}"> <button type="button"
                                                    class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                        aria-hidden="true"></i>Edit</button>
                                            </a>
                                            <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a>
                                                    <input type="submit" value="DELETE">
                                                </a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

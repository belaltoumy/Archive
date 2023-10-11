@extends('Categore.layout')
@section('content')
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2> Invoices </h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('invoices/create') }}" class="btn btn-succes btn-sm" title="Add New invoices">
                        Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>code</th>
                                    <th>Purchasing_price</th>
                                    <th>selling_price</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($invoices as $item)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->Purchasing_price }}</td>
                                    <td>{{ $item->selling_price }}</td>
                                    <td>
                                        <a href="{{route('invoices.show',$item->id)}}"><button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                    <form action="{{route('invoices.destroy',$item->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a>
                                                            <input type="submit" value="DELETE">
                                                        </a>
                                                    </form>
                                    </td></tr>

                                @endforeach

                                {{-- <tr>
                    <td>1</td>
                    <td>clothes</td>
                    <td>300$</td>
                    <td>
                        <a href="view Categore"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                        <a href="Edit Categore"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <a href="Delete Categore"><button class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Delete</button></a>
                    </td>
                </tr> --}}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

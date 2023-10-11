@extends('Categore.layout')
@section('content')
    <div class="row" style="margin:20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2> Exchange الصرف </h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('exchange /create') }}" class="btn btn-succes btn-sm" title="Add New exchange">
                        Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Many_Tl</th>
                                    <th>Many_DR</th>
                                    <th>exchange_rate </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($exchange as $item)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->Many_Tl }}</td>
                                    <td>{{ $item->Many_DR }}</td>
                                    <td>{{ $item->exchange_rate }}</td>
                                    <td>
                                        <a href="{{route('exchange.edit',$item->id)}}"><button class="btn btn-info btn-sm"><i class="fa fa-eye"
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                    <form action="{{route('exchange.destroy',$item->id)}}" method="post">
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

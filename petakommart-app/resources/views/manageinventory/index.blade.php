@extends('layouts.sideNav')
@section('content')
<div class="container">
<<<<<<< Updated upstream
    <h1>Inventory Details</h1>
    <table class="table table-striped">
        <thead class="thead-dark">
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total Price</th>
                    <th>Stock</th>
                    <th>Action</th>
=======
        <h1>Inventory Details</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Stock</th>
>>>>>>> Stashed changes
                </tr>
            </thead>
            <tbody>
                @foreach($inventorys as $item)
                    <tr>
<<<<<<< Updated upstream
                        <td>{{ $item->productcode }}</td>
=======
>>>>>>> Stashed changes
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->amount }}</td>
<<<<<<< Updated upstream
                        <td>
                            @if($item->quantity < 50)
                                <span style="color: red;">Low</span>
                            @else
                                <span style="color: green;">High</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('inventorys.delete', $item->itemID) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                        <td><a href="{{ route('inventorys.edit', $item->itemID) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <tr>
                <td><a href="{{ route('inventorys.create') }}" class="btn btn-success">Add New Inventory</a></td>
            </tr>
    </div>
@endsection
=======
                        <td>{{ $item->stock }}</td>
                        <td>
                            <form action="{{route('inventorys.delete', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete blog</button>
                            </form>
                        </td>
                        <td><a href="{{route('inventorys.edit', $item->id)}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tr>
                <td><a href = "{{route('inventorys.create', $item -> id)}}">new inventory </a></td>
</tr>
        </table>
    </div>
@endsection
>>>>>>> Stashed changes

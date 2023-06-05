@extends('layouts.sideNav')
@section('content')
<div class="container">
        <h1>Inventory Details</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventorys as $item)
                    <tr>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>
                            <form action="{{route('inventorys.delete', $item->itemID)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete blog</button>
                            </form>
                        </td>
                        <td><a href="{{route('inventorys.edit', $item->itemID)}}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tr>
                <td><a href = "{{route('inventorys.create')}}">new inventory </a></td>
            </tr>
        </table>
    </div>
@endsection
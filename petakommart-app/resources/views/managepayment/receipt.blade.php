@extends('layouts.sideNav')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Receipt</title>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }
        .receipt {
            width: 100%;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        table th, table td {
            padding: 5px;
            text-align: left;
        }
        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="receipt">
            <h2>Receipt</h2>
            <h4>Customer Name: {{ $payment->customer_name }}</h4>
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payment->items as $item)
                        <tr>
                            <td>{{ $item->item_name }}</td>
                            <td>{{ $item->item_quantity }}</td>
                            <td>{{ $item->item_price }}</td>
                            <td>{{ $item->item_total_price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-right">
                <h4>Total Amount: {{ $payment->total_amount }}</h4>
                <button>Pay Now</button>
            </div>
        </div>
    </div>
</body>
</html>
@endsection

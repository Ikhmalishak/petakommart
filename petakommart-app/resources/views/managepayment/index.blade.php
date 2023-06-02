@extends('layouts.sideNav')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Cashier Interface</title>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }
        .form {
            width: 45%;
        }
        .cart {
            width: 45%;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form">
            <h2>Enter Item Information</h2>
            <form action="{{ route('payments.addToCart') }}" method="post">
                @csrf

                <label for="item_id">Item ID:</label>
                <input type="text" id="item_id" name="item_id" required>

                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>

                <input type="submit" value="Add to Cart">
            </form>
        </div>
        <div class="cart">
            <h2>Cart</h2>
            <ul>
                @foreach ($cartItems as $item)
                    <li>Item ID: {{ $item['item_id'] }} - Quantity: {{ $item['quantity'] }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
@endsection
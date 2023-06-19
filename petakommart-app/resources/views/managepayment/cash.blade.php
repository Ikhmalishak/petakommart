<!-- cash.blade.php -->
@extends('layouts.sideNav')

@section('content')

    <div class="container">
        <h2>Cash Interface</h2>

        <div>
            <h4>Total Purchase: ${{ $totalPurchase }}</h4>
        </div>

        <div>
            <label for="amountGiven">Amount Given:</label>
            <input type="number" id="amountGiven" name="amountGiven" step="0.01" min="0" required>
        </div>

        <div>
            <label for="change">Change:</label>
            <input type="number" id="change" name="change" step="0.01" min="0" readonly>
        </div>
        <div class="fixed-bottom-right">
        <button class="btn btn-primary">Done</button>
    </div>
        <div>
            <button id="calculateButton" class="btn btn-primary">Calculate</button>
        </div>

    </div>
    <style>

    .fixed-bottom-right {
        position: fixed;
        bottom: 100px;
        right: 20px;
    }
</style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var amountGivenInput = document.getElementById('amountGiven');
            var changeInput = document.getElementById('change');
            var calculateButton = document.getElementById('calculateButton');

            calculateButton.addEventListener('click', function() {
                var amountGiven = parseFloat(amountGivenInput.value);
                var change = amountGiven - {{ $totalPurchase }};
                changeInput.value = change.toFixed(2);
            });
        });
    </script>
@endsection

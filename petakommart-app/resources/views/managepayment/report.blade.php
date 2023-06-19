@extends('layouts.sideNav')
@section('content')
    <div class="container">
        <h1>Payment Report</h1>

        <table class="table">
<h1>Receipt</h1>
<p>Payment ID: {{ $payment->id }}</p>
<p>Total Amount: {{ $payment->total_amount }}</p>
<p>Date: {{ $payment->created_at }}</p>

        </table>
    </div>
@endsection
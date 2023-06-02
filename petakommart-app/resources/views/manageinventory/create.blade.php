@extends('layouts.sideNav')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Inventory</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('inventorys.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input id="product_name" type="text" class="form-control" name="product_name" required>
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input id="quantity" type="quantity" class="form-control" name="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="price">price</label>
                                <input id="price" type="price" class="form-control" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="amount">amount</label>
                                <input id="amount" type="amount" class="form-control" name="amount" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input id="stock" type="stock" class="form-control" name="stock" required>
                            </div>

                            <!-- Add more fields for profile attributes here -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Inventory</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
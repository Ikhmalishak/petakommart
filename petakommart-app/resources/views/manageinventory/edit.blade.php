@extends('layouts.sideNav')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Inventory</div>

                    <div class="card-body">
                        <form  action="{{ route('inventorys.update', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="product_name">Product Name</label>
                                <input id="product_name" type="text" class="form-control" name="product_name" value="{{ $item->product_name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input id="quantity" type="quantity" class="form-control" name="quantity" value="{{ $item->quantity }}" required>
                            </div>
                            <div class="form-group">
                                <label for="price">price</label>
                                <input id="price" type="price" class="form-control" name="price" value="{{ $item->price }}" required>
                            </div>
                            <div class="form-group">
                                <label for="amount">amount</label>
                                <input id="amount" type="amount" class="form-control" name="amount" value="{{ $item->amount }}" required>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input id="stock" type="stock" class="form-control" name="stock" value="{{ $item->product_name }}" required>
                            </div>

                            <!-- Add more fields for profile attributes here -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Inventory</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection